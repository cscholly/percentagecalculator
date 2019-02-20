//This JS file will get values from user and calc %
    //set variables
    var percentage = 0;
    var amount = 0;
    var percentageAmountOf = 0;


    function percentageCalc() {
        //calculations
        var percentage = document.getElementById('percentage').value;
        var amount = document.getElementById('amount').value;
        percentageAmountOf = (percentage/amount)*100;

        document.getElementById('percentageResult').innerHTML = percentage;
        document.getElementById('amountResult').innerHTML = amount;
        document.getElementById('answer').innerHTML = percentageAmountOf;
    }


// Reset form
function resetCalc() {
    document.getElementById("percentageResult").reset();
    document.getElementById('amountResult').innerHTML = 0;
    document.getElementById('answer').innerHTML = 0;
    document.getElementById('percentage').innerHTML = 0;
    document.getElementById('amount').innerHTML = 0;
    document.getElementById('percentageAmountOf').innerHTML = 0;


}
