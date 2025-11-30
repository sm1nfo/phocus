@extends('layout')

@section('content')
<div class="page-header">
    <h2>Cadastrar Cliente</h2>
    <a href="{{ route('clients.index') }}" class="btn btn-edit">Voltar</a>
</div>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="form-label">Nome Completo</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    
    <div class="form-grid">
        <div class="form-group">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control mask-cpf" maxlength="14" placeholder="000.000.000-00" required>
        </div>
        <div class="form-group">
            <label class="form-label">Celular</label>
            <input type="text" name="phone" class="form-control mask-phone" maxlength="15" placeholder="(00) 00000-0000">
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">Endereço</label>
        <input type="text" name="address" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Cliente</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        function formatCPF(value) {
            value = value.replace(/\D/g, ''); // Remove letras/símbolos
            if (value.length > 11) value = value.slice(0, 11); // Limita a 11
            
            return value
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        }

        function formatPhone(value) {
            value = value.replace(/\D/g, ''); // Remove letras/símbolos
            if (value.length > 11) value = value.slice(0, 11); // Limita a 11
            
            if (value.length > 10) {
                // Celular com 9 dígitos: (11) 91234-5678
                return value.replace(/^(\d\d)(\d{5})(\d{4}).*/, '($1) $2-$3');
            } else if (value.length > 5) {
                // Telefone/Celular incompleto: (11) 1234-5678
                return value.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, '($1) $2-$3');
            } else if (value.length > 2) {
                // Apenas DDD: (11) 12...
                return value.replace(/^(\d\d)(\d{0,5})/, '($1) $2');
            }
            return value;
        }

        const cpfInput = document.querySelector('.mask-cpf');
        const phoneInput = document.querySelector('.mask-phone');

        if (cpfInput) {
            cpfInput.addEventListener('input', function (e) {
                e.target.value = formatCPF(e.target.value);
            });
        }

        if (phoneInput) {
            phoneInput.addEventListener('input', function (e) {
                e.target.value = formatPhone(e.target.value);
            });
        }

        const inputs = [cpfInput, phoneInput];
        inputs.forEach(function(input) {
            if (input) {
                const parentForm = input.closest('form');
                
                if (parentForm && !parentForm.dataset.listenerAdded) {
                    parentForm.dataset.listenerAdded = "true"; // Evita duplicar o evento

                    parentForm.addEventListener('submit', function() {
                        // Antes de enviar, removemos tudo que não é número
                        if (cpfInput) cpfInput.value = cpfInput.value.replace(/\D/g, '');
                        if (phoneInput) phoneInput.value = phoneInput.value.replace(/\D/g, '');
                    });
                }
            }
        });
    });
</script>
@endsection