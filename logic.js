//INSERT

  
let x = $(document);
x.ready(startEventsRegistration);

function startEventsRegistration(){
    
    let x = $("#enter-registration");
    x.click(enter);
}

function enter(){
    
    let id = $("#id-registration").val();
    let name = $("#name-registration").val();
    let lastName = $("#lastName-registration").val();
    
    $.ajax({
        async: true,
        type: "POST",
        dataType: "html",
        url: "dataBase.php",
        data: { id: id, name: name, lastName: lastName },
        beforeSend: arrivedRegistration,
        success: arrivingRegistration,
        timeout: 5000,
        error: errorRegistration
    });
    
    return false;
}

function arrivedRegistration(){
    let x = $("#answer-registration");
    x.html('<img src="https://i.gifer.com/ZKZg.gif" alt="load" width="100" height="100">');
}

function arrivingRegistration(data){
    $("#answer-registration").text(data);
}

function errorRegistration(){
    $("#answer-registration").text("Try Later");
}

//ORDENAR
