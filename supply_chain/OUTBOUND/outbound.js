function updateItems() {
      var itemTypeSelect = document.getElementById("productTp");
      var productNameSelect = document.getElementById("productname");
      
      productNameSelect.innerHTML="";
      
      // Get the selected gender
      var selectedItemType = itemTypeSelect.value;

      // Create new options based on the selected gender
      if (selectedItemType === "Motherboard") {
        var itemNames = ["ASUS ROG Strix Z590-E Gaming", "ASUS TUF Gaming X570-Plus", "ASUS ProArt B550-Creator", "MSI MPG X570 GAMING PRO CARBON", "MSI MAG B550 TOMAHAWK", "MSI MAG B460 TOMAHAWK"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          productNameSelect.appendChild(option);
        }
      } else if (selectedItemType === "Processor") {
        var itemNames = ["Intel Core i9-11900K", "Intel Core i7-11700K", "Intel Core i5-11600K", "AMD Ryzen 9 5950X", "AMD Ryzen 7 5800X", "AMD Ryzen 5 5400"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          productNameSelect.appendChild(option);
        }
      }
      else if (selectedItemType === "RAM") {
        var itemNames = ["Corsair Vengeance LPX DDR4(8GB)", "Corsair Dominator Platinum DDR4(16GB)", "Corsair Vengeance RGB Pro DDR4(16GB)", "Crucial Ballistix Sport DDR4(4GB)", "Crucial Ballistix Elite DDR4(8GB)", "Kingston HyperX Fury DDR 4(8GB)"];
        for (var i = 0; i < itemNames.length; i++) {
          var option = document.createElement("option");
          option.value = itemNames[i];
          option.text = itemNames[i];
          productNameSelect.appendChild(option);
        }
      }
      else if (selectedItemType === "none"){
        var option = document.createElement("option");
          option.value = "other";
          option.text = "--Go Back and Select--";
          productNameSelect.appendChild(option);
      }
    }
