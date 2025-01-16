document.getElementById('calculateBtn').addEventListener('click', () => {

    const calcMode = document.getElementById('calcMode').value;
    const amount = parseFloat(document.getElementById('amount').value);
    const taxRate = parseFloat(document.getElementById('taxRate').value);

    if (isNaN(amount) || isNaN(taxRate) || amount <= 0 || taxRate <= 0) {
        alert('Wprowadź poprawne wartości liczbowe.');
        return;
    }

    let resultAmount = 0;
    let taxAmount = 0;

    if (calcMode === 'bruttoToNetto') {
        taxAmount = (amount * taxRate) / (100 + taxRate);
        resultAmount = amount - taxAmount;
    } else if (calcMode === 'nettoToBrutto') {
        taxAmount = (amount * taxRate) / 100;
        resultAmount = amount + taxAmount;
    }

    document.getElementById('resultAmount').textContent = `Wynik: ${resultAmount.toFixed(2)} zł`;
    document.getElementById('taxAmount').textContent = `Podatek: ${taxAmount.toFixed(2)} zł`;
});
