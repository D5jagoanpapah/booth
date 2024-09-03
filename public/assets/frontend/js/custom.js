const durationInput = document.getElementById('duration');
        const subtotalHarga = document.getElementById('subtotalHarga');

        document.getElementById('increment').addEventListener('click', () => {
            durationInput.value = parseInt(durationInput.value) + 1;
            updateSubtotal();
        });

        document.getElementById('decrement').addEventListener('click', () => {
            if (parseInt(durationInput.value) > 1) {
                durationInput.value = parseInt(durationInput.value) - 1;
                updateSubtotal();
            }
        });

        function updateSubtotal() {
            const hargaPerDurasi = 10000;
            const durasi = parseInt(durationInput.value);
            subtotalHarga.textContent = `Rp ${durasi * hargaPerDurasi}`;
        }