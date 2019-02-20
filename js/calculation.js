//This JS file will get values from user and calc %
    //set variables
    var monthlyIncome = 0;
    var monthlyTax = 0;


function percentageCalc(val) {
    //get form values
    monthlyIncome = document.getElementById('monthlyIncome').value;

    annualRebate = val;

    if (chosenAge == 1){
        annualRebate = annualRebatenderunder;
    } else if (chosenAge == 2){
        annualRebate = annualRebatenderbetween;
    } else if (chosenAge == 3) {
        annualRebate = annualRebatenderover;
    }

    //basic salary calculations
    monthlyIncome = parseFloat(monthlyIncome);
    annualIncome = parseFloat(Math.round(monthlyIncome * 12));
    annualInc = parseFloat(Math.round(monthlyIncome * 12));

    //calc paye
    if (annualInc > level1_bottom && annualInc < level1_top){
    annualTax = ((annualInc * level1_tax) - annualRebate);
}   else if (annualInc > level2_bottom && annualInc < level2_top){
    annualTax = (((level1_top * level1_tax) + ((annualInc-level1_top) * level2_tax)) - annualRebate);
}   else if (annualInc > level3_bottom && annualInc < level3_top){
    annualTax = (((level1_top * level1_tax)+((level2_top-level1_top) * level2_tax)+((annualInc-level2_top) * level3_tax)) - annualRebate);
}   else if (annualInc > level4_bottom && annualInc < level4_top){
    annualTax = (((level1_top * level1_tax)+((level2_top - level1_top) * level2_tax) + ((level3_top - level2_top) * level3_tax) +((annualInc-level3_top) * level4_tax)) - annualRebate);
}   else if (annualInc > level5_bottom && annualInc < level5_top){
    annualTax = (((level1_top * level1_tax)+((level2_top - level1_top) * level2_tax) + ((level3_top - level2_top) * level3_tax) + ((level4_top - level3_top) * level4_tax) + ((annualInc-level4_top) * level5_tax)) - annualRebate);
}   else if (annualInc > level6_bottom){
    annualTax = (((level1_top * level1_tax)+((level2_top - level1_top) * level2_tax) + ((level3_top - level2_top) * level3_tax) + ((level4_top - level3_top) * level4_tax) + ((level5_top - level4_top) * level5_tax) + ((annualInc-level5_top) * level6_tax)) - annualRebate);
}
    //calc UIF
    UIF = (monthlyIncome * 0.01);
    if (UIF > UIFcap) UIF = UIFcap;

    //calc monthly tax
    monthlyTax = (annualTax / 12);
    if (monthlyTax < 0) monthlyTax = 0;
    if (annualTax < 0) annualTax = 0;

    //write results
    document.getElementById('annualIncome').innerHTML = currencyFormat(annualIncome);
    document.getElementById('monthlyInc').innerHTML = currencyFormat(monthlyIncome);
    document.getElementById('monthlyTax').innerHTML = currencyFormat(monthlyTax);
    document.getElementById('annualTax').innerHTML = currencyFormat(annualTax);
    document.getElementById('nettoIncome').innerHTML = currencyFormat(((annualInc / 12) - monthlyTax) - UIF);
    document.getElementById('UIF').innerHTML = currencyFormat(UIF);
    document.getElementById('addResult').className = "panel panel-success fade in";
    document.getElementById('addResult').style.backgroundColor = "#DFF0D8";
}


// Reset form
function resetCalc() {
    document.getElementById("calcForm").reset();
    document.getElementById('annualIncome').innerHTML = 0;
    document.getElementById('monthlyInc').innerHTML = 0;
    document.getElementById('monthlyTax').innerHTML = 0;
    document.getElementById('annualTax').innerHTML = 0;
    document.getElementById('UIF').innerHTML = 0;


}
