document.querySelectorAll('.input-group .fa-eye').forEach(icon => {
    icon.addEventListener('click', function () {
        const input = this.closest('.input-group').querySelector('input[type="password"], input[type="text"]');
        const type = input.type === 'password' ? 'text' : 'password';
        input.type = type; // Toggle the input type
        this.classList.toggle('fa-eye-slash'); // Toggle between eye and eye-slash
        this.classList.toggle('fa-eye');
    });
});
