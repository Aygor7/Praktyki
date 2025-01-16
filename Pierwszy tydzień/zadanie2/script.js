document.getElementById('calculateBtn').addEventListener('click', () => {

    const saleValue = parseFloat(document.getElementById('saleValue').value);
    const marginRate = parseFloat(document.getElementById('marginRate').value);

    if (isNaN(saleValue) || isNaN(marginRate) || saleValue <= 0 || marginRate <= 0) {
        alert('Wprowadź poprawne wartości liczbowe większe od zera.');
        return;
    }

    const profitAmount = (saleValue * marginRate) / 100;

    document.getElementById('profitAmount').textContent = `Zarobek sprzedawcy: ${profitAmount.toFixed(2)} zł`;
});
