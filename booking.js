/* Original code sourced and adapted for educational purposes:
https://stackoverflow.com/questions/5686735/populate-one-dropdown-based-on-selection-in-another
*/

function movieChange(ddl1, ddl2) {
  console.log('movie changed and is now ' + ddl1);
  var AF = ["Select Session", "MONDAY 8:00 PM", "TUESDAY 8:00 PM", "SATURDAY 9:00 PM", "SUNDAY 9:00 PM"];
  var CH = ["Select Session", "MONDAY 4:30 PM", "TUESDAY 4:30 PM", "WEDNESDAY 6:00 PM", "THURSDAY 6:00 PM", "FRIDAY 6:00 PM", "SATURDAY 12:00 PM", "SUNDAY 12:00 PM"];
  var AC = ["Select Session", "WEDNESDAY 1:00 PM", "THURSDAY 1:00 PM", "FRIDAY 1:00 PM", "SATURDAY 3:00 PM", "SUNDAY 3:00 PM"];
  var RC = ["Select Session", "MONDAY 1:00 PM", "TUESDAY 1:00 PM", "WEDNESDAY 9:00 PM", "THURSDAY 9:00 PM", "FRIDAY 9:00 PM", "SATURDAY 6:00 PM", "SUNDAY 6:00 PM"];
  var AFkey = ["", "MON-20", "TUE-20", "SAT-21", "SUN-21"];
  var CHkey = ["", "MON-16", "TUE-16", "WED-18", "THU-18", "FRI-18", "SAT-12", "SUN-12"];
  var ACkey = ["", "WED-13", "THU-13", "FRI-13", "SAT-15", "SUN-15"];
  var RCkey = ["", "MON-13", "TUE-13", "WED-21", "THU-21", "FRI-21", "SAT-18", "SUN-18"];

  switch(ddl1.value){
    case 'AF':
      ddl2.options.length = 0;
      for (var i=0; i < AF.length; i++) {
      createOption(ddl2, AF[i], AFkey[i]);
      }
      break;
    case 'CH':
      ddl2.options.length = 0;
      for (i = 0; i < CH.length; i++) {
      createOption(ddl2, CH[i], CHkey[i]);
      }
      break;
    case 'AC':
      ddl2.options.length = 0;
      for (i = 0; i < AC.length; i++) {
      createOption(ddl2, AC[i], ACkey[i]);
      }
      break;
    case 'RC':
      ddl2.options.length = 0;
      for (i = 0; i < RC.length; i++) {
      createOption(ddl2, RC[i], RCkey[i]);
      }  
      break;
    default:
      ddl2.options.length = 0;
      break;
  }
}

function createOption(ddl, text, value) {
    var opt = document.createElement('option');
    opt.text = text;
    opt.value = value;
    ddl.options.add(opt);
}

function sessionChange(session, ddl1, ddl2, ddl3, ddl4, ddl5, ddl6, ddl7, ddl8) { 
  //currently working, switching movie options for ticket prices
  console.log('session changed and is now ' + session);
  var cheaper = ["MON-13", "TUE-13", "WED-13", "THU-13", "FRI-13",
      "MON-16", "TUE-16", "MON-20", "TUE-20"];
  var Elements = [ddl1, ddl2, ddl3, ddl4, ddl5, ddl6, ddl7, ddl8];
  var dcQualityPrices = [
      ["0", "1: $12.50", "2: $25.00", "3: $37.50", "4: $50.00"],
      ["0", "1: $10.50", "2: $21.00", "3: $31.50", "4: $42.00"],
      ["0", "1: $8.50", "2: $17.00", "3: $25.50", "4: $34.00"],
      ["0", "1: $25.00", "2: $50.00", "3: $75.00", "4: $100.00"],
      ["0", "1: $20.00", "2: $40.00", "3: $60.00", "4: $80.00"],
      ["0", "1: $22.00", "2: $44.00", "3: $66.00", "4: $88.00"],
      ["0", "1: $20.00", "2: $40.00", "3: $60.00", "4: $80.00"],
      ["0", "1: $20.00", "2: $40.00", "3: $60.00", "4: $80.00"]
  ];
  var fullQualityPrices = [
      ["0", "1: $18.50", "2: $37.00", "3: $55.50", "4: $74.00"],
      ["0", "1: $15.50", "2: $31.00", "3: $46.50", "4: $62.00"],
      ["0", "1: $12.50", "2: $25.00", "3: $37.50", "4: $50.00"],
      ["0", "1: $30.00", "2: $60.00", "3: $90.00", "4: $120.00"],
      ["0", "1: $25.00", "2: $50.00", "3: $75.00", "4: $100.00"],
      ["0", "1: $33.00", "2: $66.00", "3: $99.00", "4: $132.00"],
      ["0", "1: $30.00", "2: $60.00", "3: $90.00", "4: $120.00"],
      ["0", "1: $30.00", "2: $60.00", "3: $90.00", "4: $120.00"]
  ];
  var keys = ["0", "1", "2", "3", "4"];

  ddl1.options.length = 0;
  ddl2.options.length = 0;
  ddl3.options.length = 0;
  ddl4.options.length = 0;
  ddl5.options.length = 0;
  ddl6.options.length = 0;
  ddl7.options.length = 0;
  ddl8.options.length = 0;
  
  var DiscountSession = false;
  for(var j=0; j < cheaper.length; j++){
    if(session.value == cheaper[j]){
      DiscountSession = true;
    }
  }

  for(var i = 0; i < Elements.length; i++){
    for(var j=0; j < keys.length; j++){
      if(DiscountSession == true){
        console.log ('Discount Session');
        createOption(Elements[i], dcQualityPrices[i][j], keys[j]);
      }
      else {
        console.log ('Full Price Session');
        createOption(Elements[i], fullQualityPrices[i][j], keys[j]);
      }
    }
  }
      console.log('movie is still ' + '// your code here');
}

function calculatePrices(field, session){
  var cheaper = ["MON-13", "TUE-13", "WED-13", "THU-13", "FRI-13",
    "MON-16", "TUE-16", "MON-20", "TUE-20"];

  var DiscountSession = false;
  for(var j=0; j < cheaper.length; j++){
    if(session.value == cheaper[j]){
      DiscountSession = true;
    }
  }
  
  var price;

  //SF
  if (DiscountSession == true)
    price = 12.50;
  else
    price = 18.50;
  var SFSubtotal = price*document.getElementById("SF").value;

  //SP
  if (DiscountSession == true)
    price = 10.50;
  else
    price = 15.50;
  var SPSubtotal = price*document.getElementById("SP").value;

  //SC
  if (DiscountSession == true)
    price = 8.50;
  else
    price = 12.50;
  var SCSubtotal = price*document.getElementById("SC").value;

  //FA
  if (DiscountSession == true)
    price = 25.00;
  else
    price = 30.00;
  var FASubtotal = price*document.getElementById("FA").value;
  
  //FC
  if (DiscountSession == true)
    price = 20.00;
  else
    price = 25.00;
  var FCSubtotal = price*document.getElementById("FC").value;
  
  //BA
  if (DiscountSession == true)
    price = 22.00;
  else
    price = 33.00;
  var BASubtotal = price*document.getElementById("BA").value;
  
  //BF
  if (DiscountSession == true)
    price = 20.00;
  else
    price = 30.00;
  var BFSubtotal = price*document.getElementById("BF").value;
  
  //BC
  if (DiscountSession == true)
    price = 20.00;
  else
    price = 30.00;
  var BCSubtotal = price*document.getElementById("BC").value;

  var StdSubtotal = SFSubtotal + SPSubtotal + SCSubtotal;
  var FirstSubtotal = FASubtotal + FCSubtotal;
  var BeanSubtotal = BASubtotal + BFSubtotal + BCSubtotal;
  var Total = StdSubtotal + FirstSubtotal + BeanSubtotal;
  document.getElementById('StdSubtotal').innerHTML = "Subtotal: $"+(StdSubtotal).toFixed(2);
  document.getElementById('FirstSubtotal').innerHTML = "Subtotal: $"+(FirstSubtotal).toFixed(2);
  document.getElementById('BeanSubtotal').innerHTML = "Subtotal: $"+(BeanSubtotal).toFixed(2);
  document.getElementById('Total').innerHTML = "Total: $"+(Total).toFixed(2);

}