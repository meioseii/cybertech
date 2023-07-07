function updateBrand() {
      var itemClassSelect = document.getElementById("classification");
      var brandSelect = document.getElementById("brand");
      
      brandSelect.innerHTML="";
      
      // Get the selected gender
      var selectedItemType = itemClassSelect.value;

      // Create new options based on the selected gender
      if (selectedItemType === "Motherboard") {
        var itemNames = ["ASUS", "MSI"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          brandSelect.appendChild(option);
        }
      } else if (selectedItemType === "Processor") {
        var itemNames = ["Intel", "AMD"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          brandSelect.appendChild(option);
        }
      }
      else if (selectedItemType === "RAM") {
        var itemNames = ["Corsair", "Crucial", "Kingston"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          brandSelect.appendChild(option);
        }
      }
      else if (selectedItemType === "none"){
        var option = document.createElement("option");
          option.value = "other";
          option.text = "--Go Back and Select--";
          brandSelect.appendChild(option);
      }
    }

function updateItem() {
      var brandSelect = document.getElementById("brand");
      var itemNameSelect = document.getElementById("itemName");
      
      itemNameSelect.innerHTML="";
      
      // Get the selected gender
      var selectedBrand = brandSelect.value;

      // Create new options based on the selected gender
      if (selectedBrand === "ASUS") {
        var itemNames = ["ASUS ROG Strix Z590-E Gaming", "ASUS TUF Gaming X570-Plus", "ASUS ProArt B550-Creator"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          itemNameSelect.appendChild(option);
        }
      } else if (selectedBrand === "MSI") {
        var itemNames = ["MSI MPG X570 GAMING PRO CARBON", "MSI MAG B550 TOMAHAWK", "MSI MAG B460 TOMAHAWK"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          itemNameSelect.appendChild(option);
        }
      }
      else if (selectedBrand === "Intel") {
        var itemNames = ["Intel Core i9-11900K", "Intel Core i7-11700K", "Intel Core i5-11600K"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          itemNameSelect.appendChild(option);
        }
      }
      else if (selectedBrand === "AMD") {
        var itemNames = ["AMD Ryzen 9 5950X", "AMD Ryzen 7 5800X", "AMD Ryzen 5 5400"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          itemNameSelect.appendChild(option);
        }
      }
      else if (selectedBrand === "Corsair") {
        var itemNames = ["Corsair Vengeance LPX DDR4(8GB)", "Corsair Dominator Platinum DDR4(16GB)", "Corsair Vengeance RGB Pro DDR4(16GB)"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          itemNameSelect.appendChild(option);
        }
      }
      else if (selectedBrand === "Crucial") {
        var itemNames = ["Crucial Ballistix Sport DDR4(4GB)", "Crucial Ballistix Elite DDR4(8GB)"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          itemNameSelect.appendChild(option);
        }
      }
      else if (selectedBrand === "Kingston") {
        var itemNames = ["Kingston HyperX Fury DDR 4(8GB)"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          itemNameSelect.appendChild(option);
        }
      }
      else if (selectedBrand === "none"){
        var option = document.createElement("option");
          option.value = "other";
          option.text = "--Go Back and Select--";
          itemNameSelect.appendChild(option);
      }
    }