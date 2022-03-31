var identificador=0;
(function () {
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault()
            event.stopPropagation()
          if (!form.checkValidity() || !ValidateEmail()) {
            
            console.log('si algo anda mal')
            form.classList.add('was-validated')
          }else{
             guardar();
          }
  
        }, false)
      })
  })();
  //toast variables
    //var toastTrigger = document.getElementById('liveToastBtn');
    var toastEmail = document.getElementById('liveToast');
    var toastConfirmation = document.getElementById('confirmToast');
    //toast method
    function llamarToastComfirmacion(){
        var toast = new bootstrap.Toast(toastConfirmation)
        toast.show();
    }
    function llamarToastEmail(){
        var toast = new bootstrap.Toast(toastEmail)
        toast.show();
    }
 


  function ValidateEmail(inputText)
    {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var correov = document.getElementById('correo');
        if(correov.value.match(mailformat))
        {
            return true;
        } else
        {
            llamarToastEmail();
            return false;
        }
    }
    function getValue(id){
        return document.getElementById(id).value;
    }
    function guardar(){
        showSpinner();
       
        setTimeout(hideSpinner,3000);
        var formulario = document.getElementById('formulario');
        formulario.submit();
        //setTimeout(setValues,2000);
        
    }
    function clearValues(){
        var inputs = document.querySelectorAll('input');
        inputs.forEach(x=>{
            if(x.type==='text'){
                x.value='';
            }
            if(x.type==='number'){
                x.value=0;
            }
        })
    }
    function setValues(){
        var nombrev = getValue('nombre');
        var correov = getValue('correo');
        var sexov = getValue('sexo');
        var cedulav = getValue('cedula');
        var telefonov = getValue('telefono');
        var direccionv = getValue('direccion');
        var marcav = getValue('marca');
        var modelov = getValue('modelo');
        var placav = getValue('placa');
        identificador++;
        var informacion = {
            id:identificador,
            nombre:nombrev,
            correo:correov,
            sexo:sexov,
            cedula:cedulav,
            telefono:telefonov,
            direccion:direccionv,
            marca:marcav,
            modelo:modelov,
            placa:placav
        }
        addToTable(informacion);
        clearValues();
    }
   
    function addToTable(datos){
        var tabla = document.getElementById('table-content');

      
      var tr ="<tr class='table-tr'>";
       
       tr +=`<td>${identificador}</td>`;
       tr+=`<td>${datos.nombre}</td>`
       tr+= `<td>${datos.correo}</td>`
       tr+= `<td>${datos.sexo}</td>`
       tr+= `<td>${datos.cedula}</td>`
       tr+= `<td>${datos.telefono}</td>`
       tr+= `<td>${datos.direccion}</td>`
       tr+= `<td>${datos.marca}</td>`
       tr+=`<td>${datos.modelo}</td>`
       tr+=`<td>${datos.placa}</td>`
       tr+="</tr>"
        tabla.innerHTML +=tr;
    }
 
var spinner = document.getElementById('spinnerDiv');
function showSpinner(){
    spinner.style.display = "block";
}
function hideSpinner(){
    spinner.style.display = "none";
    llamarToastComfirmacion();
}
(()=>{
    spinner.style.display = "none";
})();

