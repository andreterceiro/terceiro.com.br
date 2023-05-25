const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch(
      {
          'width': 1920,
          'height': 1080,
          'headless': false,
          'args': [
              '--window-size=1920,1080',
              '--no-sandbox',
              '--disable-setuid-sandbox',
              '--start-maximized'
          ],
          'defaultViewport': null
      }
    );

  const page = await browser.newPage();

  await page.goto('http://www.uol.com.br');
})();