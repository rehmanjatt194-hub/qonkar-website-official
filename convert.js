const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const baseInputDir = './images/services-images';
const baseOutputDir = './images/services-images-webp';

const folders = fs.readdirSync(baseInputDir);

folders.forEach(folder => {
  const inputDir = path.join(baseInputDir, folder);
  const outputDir = path.join(baseOutputDir, folder);

  if (fs.statSync(inputDir).isDirectory()) {
    if (!fs.existsSync(outputDir)) fs.mkdirSync(outputDir, { recursive: true });

    fs.readdirSync(inputDir).forEach(file => {
      if (/\.(jpg|jpeg|png)$/i.test(file)) {
        const outputFileName = file.replace(/\.(jpg|jpeg|png)$/i, '.webp');
        sharp(path.join(inputDir, file))
          .resize({ width: 1200, withoutEnlargement: true })
          .webp({ quality: 75 })
          .toFile(path.join(outputDir, outputFileName))
          .then(() => console.log(`Converted: ${folder}/${file} -> ${outputFileName}`))
          .catch(err => console.error(`Failed: ${folder}/${file}`, err));
      } else if (/\.webp$/i.test(file)) {
        fs.copyFileSync(path.join(inputDir, file), path.join(outputDir, file));
        console.log(`Already webp, copied: ${folder}/${file}`);
      }
    });
  }
});