import {domReady} from '@roots/sage/client';
import AOS from 'aos';
//import { demoModule } from './modules/demoModule';
import { smoothScroll } from './modules/smoothScroll';
import { mobileMenu } from './modules/mobileMenu';
/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
  AOS.init();
  //demoModule();
  smoothScroll();
  mobileMenu();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
