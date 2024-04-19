//1
document.getElementById("open-modal-btn").addEventListener("click", function() {
    document.getElementById("my-plant").classList.add("open")
})
document.getElementById("close-modal-btn").addEventListener("click", function() {
    document.querySelector('.name_plant').value = "";
    document.querySelector('.types_plantss').value = "-1";
    document.querySelector('.free_buildings').value = "-1";
    document.querySelector('.sq').value = "";
    document.querySelector('.date').value = "";
    document.getElementById("my-plant").classList.remove("open")
    
})
/*event.preventDefault();
var first = document.querySelector('.name_plant').value;
var second = document.querySelector('.types_plantss').value;
var third = document.querySelector('.free_buildings').value;
var fourth = document.querySelector('.sq').value;
var fifth = document.querySelector('.date').value;*/
document.getElementById("forma").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.name_plant').value;
    var second = document.querySelector('.types_plantss').value;
    var third = document.querySelector('.free_buildings').value;
    var fourth = document.querySelector('.sq').value;
    var fifth = document.querySelector('.date').value;

    if(first=="" || second=="-1" || third=="-1" || fourth=="" || fifth=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-plant").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.name_plant').value = "";
        document.querySelector('.types_plantss').value = "-1";
        document.querySelector('.free_buildings').value = "-1";
        document.querySelector('.sq').value = "";
        document.querySelector('.date').value = "";

});



//2

document.getElementById("open-modal-btn2").addEventListener("click", function() {
    document.getElementById("my-type-plant").classList.add("open")
})
document.getElementById("close-modal-btn2").addEventListener("click", function() {
    document.querySelector('.name_type_plant').value = "";
    document.querySelector('.time_germination').value = "";
    document.querySelector('.frequency_of_care').value = "";
    document.querySelector('.the_necessary_temperature').value = "";
    document.querySelector('.required_humidity').value = "";
    document.querySelector('.plant_cost').value = "";
    document.querySelector('.plant_sell').value = "";
    document.getElementById("my-type-plant").classList.remove("open")
    
})
document.getElementById("forma2").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.name_type_plant').value;
    var second = document.querySelector('.time_germination').value;
    var third = document.querySelector('.frequency_of_care').value;
    var fourth = document.querySelector('.the_necessary_temperature').value;
    var fifth = document.querySelector('.required_humidity').value;
    var sixth = document.querySelector('.plant_cost').value;
    var seventh = document.querySelector('.plant_sell').value;

    if(first=="" || second=="" || third=="" || fourth=="" || fifth=="" || sixth=="" || seventh=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-type-plant").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.name_type_plant').value = "";
        document.querySelector('.time_germination').value = "";
        document.querySelector('.frequency_of_care').value = "";
        document.querySelector('.the_necessary_temperature').value = "";
        document.querySelector('.required_humidity').value = "";
        document.querySelector('.plant_cost').value = "";
        document.querySelector('.plant_sell').value = "";

});

//3
document.getElementById("open-modal-btn3").addEventListener("click", function() {
    document.getElementById("my-buildings").classList.add("open")
})
document.getElementById("close-modal-btn3").addEventListener("click", function() {
    document.querySelector('.id_type_building').value = "-1";
    document.querySelector('.name_building').value = "";
    document.querySelector('.date_built').value = "";
    document.getElementById("my-buildings").classList.remove("open")
    
})
document.getElementById("forma3").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.id_type_building').value;
    var second = document.querySelector('.name_building').value;
    var third = document.querySelector('.date_built').value;

    if(first=="-1" || second=="" || third=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-buildings").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.id_type_building').value = "-1";
        document.querySelector('.name_building').value = "";
        document.querySelector('.date_built').value = "";
});
//4
document.getElementById("open-modal-btn4").addEventListener("click", function() {
    document.getElementById("my-built").classList.add("open")
})
document.getElementById("close-modal-btn4").addEventListener("click", function() {
    document.querySelector('.name_type_built').value = "";
    document.querySelector('.average_temperature_here').value = "";
    document.querySelector('.average_humidity_here').value = "";
    document.querySelector('.maintenance_frequency').value = "";
    document.querySelector('.square_building').value = "";
    document.getElementById("my-built").classList.remove("open")
    
})
document.getElementById("forma4").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.name_type_built').value;
    var second = document.querySelector('.average_temperature_here').value;
    var third = document.querySelector('.average_humidity_here').value;
    var fourth = document.querySelector('.maintenance_frequency').value;
    var fifth = document.querySelector('.square_building').value;

    if(first=="" || second=="" || third=="" || fourth=="" || fifth=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-built").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.name_type_built').value = "";
        document.querySelector('.average_temperature_here').value = "";
        document.querySelector('.average_humidity_here').value = "";
        document.querySelector('.maintenance_frequency').value = "";
        document.querySelector('.square_building').value = "";

});

//5

document.getElementById("open-modal-btn5").addEventListener("click", function() {
    document.getElementById("my-fertilizer").classList.add("open")
})
document.getElementById("close-modal-btn5").addEventListener("click", function() {
    document.querySelector('.name_fertilizer').value = "";
    document.querySelector('.fertilizer_cost').value = "";
    document.querySelector('.properties').value = "";
    document.getElementById("my-fertilizer").classList.remove("open")
    
})
document.getElementById("forma5").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.name_fertilizer').value;
    var second = document.querySelector('.fertilizer_cost').value;
    var third = document.querySelector('.properties').value;

    if(first=="" || second=="" || third=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-fertilizer").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.name_fertilizer').value = "";
        document.querySelector('.fertilizer_cost').value = "";
        document.querySelector('.properties').value = "";
});

//6

document.getElementById("open-modal-btn6").addEventListener("click", function() {
    document.getElementById("my-fertilizer-costs").classList.add("open")
})
document.getElementById("close-modal-btn6").addEventListener("click", function() {
    document.querySelector('.id_plant_f').value = "-1";
    document.querySelector('.id_buildings_f').value = "-1";
    document.querySelector('.id_fertilizer_f').value = "-1";
    document.querySelector('.year_fertilizers_costs').value = "";
    document.querySelector('.fertilizers_kg').value = "";
    document.getElementById("my-fertilizer-costs").classList.remove("open")
    
})
document.getElementById("forma6").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.id_plant_f').value;
    var second = document.querySelector('.id_buildings_f').value;
    var third = document.querySelector('.id_fertilizer_f').value;
    var fourth = document.querySelector('.year_fertilizers_costs').value;
    var fifth = document.querySelector('.fertilizers_kg').value;

    if(first=="-1" || second=="-1" || third=="-1" || fourth=="" || fifth=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-fertilizer-costs").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.id_plant_f').value = "-1";
        document.querySelector('.id_buildings_f').value = "-1";
        document.querySelector('.id_fertilizer_f').value = "-1";
        document.querySelector('.year_fertilizers_costs').value = "";
        document.querySelector('.fertilizers_kg').value = "";
});

//7

document.getElementById("open-modal-btn7").addEventListener("click", function() {
    document.getElementById("my-types_TO").classList.add("open")
})
document.getElementById("close-modal-btn7").addEventListener("click", function() {
    document.querySelector('.name_TO').value = "";
    document.querySelector('.cost_TO').value = "";
    document.getElementById("my-types_TO").classList.remove("open")
    
})
document.getElementById("forma7").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.name_TO').value;
    var second = document.querySelector('.cost_TO').value;

    if(first=="" || second=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-types_TO").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.name_TO').value = "";
        document.querySelector('.cost_TO').value = "";
});

//8

document.getElementById("open-modal-btn8").addEventListener("click", function() {
    document.getElementById("my-TO").classList.add("open")
})
document.getElementById("close-modal-btn8").addEventListener("click", function() {
    document.querySelector('.id_TO_b').value = "-1";
    document.querySelector('.id_TO').value = "-1";
    document.querySelector('.year_TO').value = "";
    document.getElementById("my-TO").classList.remove("open")
    
})
document.getElementById("forma8").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
    var first = document.querySelector('.id_TO_b').value;
    var second = document.querySelector('.id_TO').value;
    var third = document.querySelector('.year_TO').value;

    if(first=="-1" || second=="-1" || third=="") 
    {
        alert("Не все поля заполнены");
        return;
    } 
    else
    {
        // Отправка данных формы с использованием AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Если запрос выполнен успешно, отображаем сообщение
                    document.getElementById("registrationMessage").textContent = xhr.responseText;
                    
                } else {
                    // Если произошла ошибка, отображаем сообщение об ошибке
                    document.getElementById("registrationMessage").textContent = "Ошибка: " + xhr.responseText;
                    
                }
            }
        };
        xhr.send(formData);
        }
        document.getElementById("my-TO").classList.remove("open");
        alert("Успешно!");
        document.querySelector('.id_TO_b').value = "-1";
        document.querySelector('.id_TO').value = "-1";
        document.querySelector('.year_TO').value = "";
});
