var brandObject = {
    "Hero": {
      "Splendor": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Super Splendor": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Xpulse": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],    
    },
    "RE": {
      "Bullet 350": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Classic 350": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Thunderbird 350": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],  
      "Bullet 500": ["2012-2015", "2016-2020", "2020-2022"],
      "Classic 500": ["2012-2015", "2016-2020", "2020-2022"],
      "Himalyan": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],  
    },
    "TVS": {
      "Apache 160": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Sports": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Apache rtr 310": ["2018-2020", "2020-2022","2022-Present"],    
    },
    "Java": {
      "Forty two": [ "2019-2020", "2020-2022","2022-Present"],
      "Perak": ["2019-2020", "2020-2022","2022-Present"],
      "Bobber": [ "2019-2020", "2020-2022","2022-Present"],    
    },
    "Yezdi": {
      "Scrambler": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Adventure": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],
      "Roadaster": ["2012-2015", "2016-2020", "2020-2022","2022-Present"],    
    },
  }
  window.onload = function() {
    var brandSel = document.getElementById("brand");
    var modelSel = document.getElementById("model");
    var yearSel = document.getElementById("year");
    for (var x in brandObject) {
      brandSel.options[brandSel.options.length] = new Option(x, x);
    }
    brandSel.onchange = function() {
      modelSel.length = 1;
      yearSel.length = 1;
      for (var y in brandObject[this.value]) {
        modelSel.options[modelSel.options.length] = new Option(y, y);
      }
    }
    modelSel.onchange = function() {
      yearSel.length = 1;
      var z = brandObject[brandSel.value][this.value];
      for (var i = 0; i < z.length; i++) {
        yearSel.options[yearSel.options.length] = new Option(z[i], z[i]);
      }
    }
  }
  