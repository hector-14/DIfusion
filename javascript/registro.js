document.addEventListener("DOMContentLoaded", async function () {
    const { value: accept } = await Swal.fire({
        title: "Datos Personales",
        Text: 'Tus datos seran guardados con el unico fin de poder brindarte información',
        input: "checkbox",
        inputValue: 0,
        inputPlaceholder: `
          <a href="Aviso.html">Terminos y Condiciones</a>
        `,
        
        inputValidator: (result) => {
          return !result && "Para continuar tienes que Aceptar los terminos y condiciones";
        }
      });
});
