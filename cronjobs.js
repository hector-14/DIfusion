const { exec } = require('child_process');
const path = require('path');

// Ruta al archivo PHP que deseas ejecutar
const phpScriptPath = path.join(__dirname, 'EnviarMail.php');

// Función para ejecutar el script PHP
const runPhpScript = () => {
  exec(`php ${phpScriptPath}`, (error, stdout, stderr) => {
    if (error) {
      console.error(`Error ejecutando el script: ${error.message}`);
      return;
    }
    if (stderr) {
      console.error(`Stderr: ${stderr}`);
      return;
    }
    console.log(`Output:\n${stdout}`);
  });
};

// Configurar node-cron para ejecutar cada 5 minutos
const cron = require('node-cron');

// Programar la tarea
cron.schedule('*/5 * * * *', () => {
  console.log(`Ejecutando el script PHP a las ${new Date().toLocaleTimeString()}`);
  runPhpScript();
});

console.log('Cron job configurado. Ejecutándose cada 5 minutos.');