const fs = require('fs');
const path = require('path');
const assetsDir = '../assets/css';
// Loop through the baseDir directory
fs.readdir(assetsDir, (err, files) => {
  files.forEach(file => {
    const filext = path.extname(file);
    if (filext === '.png' || 
      filext === '.jpg' || 
      filext === '.svg' || 
      filext === '.gif') {
        fs.unlinkSync(`${assetsDir}/${file}`);
      }
  });
});