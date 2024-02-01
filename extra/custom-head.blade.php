{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style> 
/* work-sans-800 - latin_latin-ext */
@font-face {
  font-display: swap;
  /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 800;
  src: url('{{themeAsset("work-sans-v19-latin_latin-ext-800.woff2")}}') format('woff2'),
  /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
  url('{{themeAsset("work-sans-v19-latin_latin-ext-800.ttf")}}') format('truetype');
  /* Chrome 4+, Firefox 3.5+, IE 9+, Safari 3.1+, iOS 4.2+, Android Browser 2.2+ */
}

/* work-sans-800italic - latin_latin-ext */
@font-face {
  font-display: swap;
  /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Work Sans';
  font-style: italic;
  font-weight: 800;
  src: url('{{themeAsset("work-sans-v19-latin_latin-ext-800italic.woff2")}}') format('woff2'),
  /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
  url('{{themeAsset("work-sans-v19-latin_latin-ext-800italic.ttf")}}') format('truetype');
  /* Chrome 4+, Firefox 3.5+, IE 9+, Safari 3.1+, iOS 4.2+, Android Browser 2.2+ */
}

/* inter-regular - cyrillic_greek_latin_latin-ext */
@font-face {
  font-display: swap;
  /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Inter';
  font-style: normal;
  font-weight: 400;
  src: url('{{themeAsset("inter-v13-cyrillic_greek_latin_latin-ext-regular.woff2")}}') format('woff2'),
  /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
  url('{{themeAsset("inter-v13-cyrillic_greek_latin_latin-ext-regular.ttf")}}') format('truetype');
  /* Chrome 4+, Firefox 3.5+, IE 9+, Safari 3.1+, iOS 4.2+, Android Browser 2.2+ */
}


html {
  font-size: 100%;
}

:root {
  --bgColor: #2E4FC4;
  --accentColor: #FFF;
  --heading-font: 'Work Sans', sans-serif;
  --font: 'Inter', sans-serif;
  --delay: .3s;
  --bg-rot: url('data:image/svg+xml,<%3Fxml version="1.0" encoding="UTF-8" standalone="no"%3F><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg width="100%" height="100%" viewBox="0 0 1080 1920" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" preserveAspectRatio="none" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><rect id="rot" x="0" y="0" width="1080" height="1920" style="fill:none;"/><clipPath id="_clip1"><rect id="rot1" serif:id="rot" x="0" y="0" width="1080" height="1920"/></clipPath><g clip-path="url(%23_clip1)"><rect x="0" y="0" width="1080" height="1920" style="fill:%23f00;"/><path d="M2641.02,987.597l-1226.76,-1499.26l-2365.71,828.067l1226.76,1499.26l2365.72,-828.067Z" style="fill:%236f003c;"/></g></svg>');
  --bg-gruen: url('data:image/svg+xml,<%3Fxml version="1.0" encoding="UTF-8" standalone="no"%3F><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg width="100%" height="100%" viewBox="0 0 1080 1920" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" preserveAspectRatio="none" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><rect id="grün" x="0" y="0" width="1080" height="1920" style="fill:none;"/><clipPath id="_clip1"><rect x="0" y="0" width="1080" height="1920"/></clipPath><g clip-path="url(%23_clip1)"><rect x="0" y="0" width="1080" height="1920" style="fill:%2300b19c;"/><path d="M2641.02,987.597l-1226.76,-1499.26l-2365.71,828.067l1226.76,1499.26l2365.72,-828.067Z" style="fill:%23004b5b;"/></g></svg>');
  --bg-violett: url('data:image/svg+xml,<%3Fxml version="1.0" encoding="UTF-8" standalone="no"%3F><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg width="100%" height="100%" viewBox="0 0 1080 1920" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" preserveAspectRatio="none" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><rect id="violett" x="0" y="0" width="1080" height="1920" style="fill:none;"/><clipPath id="_clip1"><rect x="0" y="0" width="1080" height="1920"/></clipPath><g clip-path="url(%23_clip1)"><rect x="0" y="0" width="1080" height="1920" style="fill:%23d675d8;"/><path d="M2641.02,987.597l-1226.76,-1499.26l-2365.71,828.067l1226.76,1499.26l2365.72,-828.067Z" style="fill:%238100a1;"/></g></svg>');
  --bg-blau: url('data:image/svg+xml,<%3Fxml version="1.0" encoding="UTF-8" standalone="no"%3F><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg width="100%" height="100%" viewBox="0 0 1080 1920" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" preserveAspectRatio="none" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><rect id="blau" x="0" y="0" width="1080" height="1920" style="fill:none;"/><clipPath id="_clip1"><rect x="0" y="0" width="1080" height="1920"/></clipPath><g clip-path="url(%23_clip1)"><rect x="0" y="0" width="1080" height="1920" style="fill:%23d4d4ff;"/><path d="M2641.02,987.597l-1226.76,-1499.26l-2365.71,828.067l1226.76,1499.26l2365.72,-828.067Z" style="fill:%232e4fc4;"/></g></svg>');
  --logo-dielinke-rot: url('data:image/svg+xml,<%3Fxml version="1.0" encoding="utf-8"%3F><svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1176.1 673.2" style="enable-background:new 0 0 1176.1 673.2;" xml:space="preserve"><style type="text/css">.st0{fill:%23FF0000;}.st1{fill:%23FFFFFF;}&lt;/style&gt;<polygon class="st0" points="1088,408.8 88,585.1 88,264.3 1088,88 "/><path class="st1" d="M176.1,493.6L176,335.2l43.9-7.7c14-2.5,26.8-1.5,38.3,3c11.5,4.5,21,11.3,28.5,20.5s12.4,20,14.5,32.3c2.6,14.6,1.5,29.1-3.3,43.5c-4.8,14.3-12.7,26.7-23.8,37s-24.4,16.9-40.1,19.6L176.1,493.6L176.1,493.6z M230.1,446.7c7.2-1.3,13.4-4.7,18.6-10.2c5.2-5.5,8.9-12.2,11-20s2.4-15.6,1.1-23.4c-1.1-6.3-3.3-11.8-6.4-16.6c-3.2-4.8-7.4-8.4-12.5-10.7c-5.2-2.3-10.7-3-16.7-1.9l-9,1.6l-0.2,83.8L230.1,446.7L230.1,446.7z"/><path class="st1" d="M316.6,468.8l-0.2-115.6l36.2-6.4l0.2,115.6L316.6,468.8z M336.4,337.7c-5.7,1-10.6,0-14.7-3s-6.6-7-7.5-12.2c-0.7-3.8-0.4-7.5,0.8-11.2s3.5-6.8,6.7-9.3s6.8-4.1,10.8-4.8c5.3-0.9,10,0.1,14.2,3c4.2,3,6.8,6.9,7.6,11.9c0.7,4,0.4,7.8-1,11.5s-3.7,6.8-6.8,9.4C343.5,335.5,340.1,337,336.4,337.7z"/><path class="st1" d="M521.9,432.6l-0.1-158.4l39.9-7l0.2,119l62.1-11l-0.1,39.4L521.9,432.6L521.9,432.6z"/><path class="st1" d="M691.5,402.7l-0.2-115.6l26.3-4.6l5.2,10.2l1.1-0.2c2.5-4.7,6-8.7,10.5-12.2c4.5-3.4,9.9-5.7,16-6.8c9.1-1.6,17.1-0.7,24,2.7s12.2,8.7,15.9,15.9s5.6,15.7,5.6,25.5v66.8l-37.1,6.5l-0.1-63.6c-0.2-3.6-0.9-6.9-2.1-9.8c-1.2-3-3.1-5.1-5.8-6.4c-2.6-1.3-5.7-1.7-9.2-1.1c-2.6,0.5-5.1,1.5-7.5,3.2c-2.3,1.7-4,4.1-5.1,7.1c-1,3.1-1.6,6.3-1.6,9.8l0.1,66.3L691.5,402.7L691.5,402.7z"/><polygon class="st1" points="916.2,363.2 881.3,310.3 913.6,248 872.6,255.2 847.5,305.1 847.6,216.8 811.4,223.2 811.3,381.6 847.5,375.2 847.5,324.8 875.7,370.2 "/><path class="st1" d="M638.5,412.1l-0.2-115.6l36.2-6.4l0.2,115.6L638.5,412.1z"/><polygon class="st1" points="609.5,255.6 653.9,279.6 706,199.2 "/><path class="st1" d="M438.3,411.2c-1.4,2.4-3.4,4.6-5.9,6.8c-2.6,2.2-5.8,3.6-9.8,4.3c-3.7,0.6-7.2,0.3-10.5-1s-6-3.5-8-6.7c-1.3-2.1-2.4-4.6-3.2-7.5l73.9-13c0.4-2.9,0.6-6.2,0.7-9.7c0.1-3.6-0.2-7-0.8-10.4c-1.7-9.8-5.5-18.2-11.3-25c-5.8-6.9-12.8-11.8-20.9-14.6c-8.1-2.9-16.7-3.5-25.8-1.9c-11.4,2-21.3,7-29.7,14.9c-8.4,7.9-14.4,17.4-18.1,28.5c-3.6,11.1-4.5,22.1-2.6,32.9c1.8,10.1,5.6,18.8,11.5,26c5.9,7.3,13,12.5,21.3,15.6s17.5,3.8,27.4,2.1c8.5-1.5,16-4.4,22.6-8.7c6.6-4.3,12-9.8,16.2-16.3c3.5-5.3,6.1-10.7,7.9-16.2L438.3,411.2L438.3,411.2z M406.5,369.6c3.3-4.1,7.5-6.6,12.5-7.5c3.8-0.7,7.3-0.3,10.5,1s5.7,3.4,7.7,6.2c1.8,2.6,3,5.5,3.6,8.6l-40.9,7.2l0.1-0.5C401,378.7,403.2,373.7,406.5,369.6L406.5,369.6z"/><path class="st1" d="M1018.4,278.1c-1.7-9.8-5.5-18.2-11.3-25c-5.8-6.9-12.8-11.8-20.9-14.6c-8.1-2.9-16.7-3.5-25.8-1.9c-11.4,2-21.3,7-29.7,14.9s-14.4,17.4-18.1,28.5c-3.6,11.1-4.5,22.1-2.6,32.9c1.8,10.1,5.6,18.8,11.5,26c5.9,7.3,13,12.5,21.3,15.6s17.5,3.8,27.4,2.1c8.5-1.5,16-4.4,22.6-8.7c6.6-4.3,12-9.8,16.2-16.3c3.5-5.3,6.1-10.7,7.9-16.2h-35c-1.4,2.4-3.4,4.5-5.8,6.7c-2.6,2.2-5.8,3.6-9.8,4.3c-3.7,0.6-7.2,0.3-10.5-1s-6-3.5-8-6.7c-1.3-2.1-2.4-4.6-3.2-7.5l73.9-13c0.4-2.9,0.6-6.2,0.7-9.7C1019.3,284.9,1019,281.5,1018.4,278.1z M943.6,289.2l0.1-0.5c1-5.8,3.2-10.9,6.5-15l0,0c3.3-4.1,7.5-6.6,12.5-7.5c3.8-0.7,7.3-0.3,10.5,1s5.7,3.4,7.7,6.2c1.8,2.6,3,5.5,3.6,8.6L943.6,289.2z"/></svg>');
  --logo-dielinke-invertiert: url('data:image/svg+xml,<%3Fxml version="1.0" encoding="utf-8"%3F><svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1176.1 673.2" style="enable-background:new 0 0 1176.1 673.2;" xml:space="preserve"><style type="text/css">.st0{fill:%23FFFFFF;}.st1{fill:%23FF0000;}&lt;/style&gt;<polygon class="st0" points="1088,408.8 88,585.1 88,264.3 1088,88 "/><path class="st1" d="M176.1,493.6L176,335.2l43.9-7.7c14-2.5,26.8-1.5,38.3,3c11.5,4.5,21,11.3,28.5,20.5s12.4,20,14.5,32.3c2.6,14.6,1.5,29.1-3.3,43.5c-4.8,14.3-12.7,26.7-23.8,37s-24.4,16.9-40.1,19.6L176.1,493.6L176.1,493.6z M230.1,446.7c7.2-1.3,13.4-4.7,18.6-10.2c5.2-5.5,8.9-12.2,11-20s2.4-15.6,1.1-23.4c-1.1-6.3-3.3-11.8-6.4-16.6c-3.2-4.8-7.4-8.4-12.5-10.7c-5.2-2.3-10.7-3-16.7-1.9l-9,1.6l-0.2,83.8L230.1,446.7L230.1,446.7z"/><path class="st1" d="M316.6,468.8l-0.2-115.6l36.2-6.4l0.2,115.6L316.6,468.8z M336.4,337.7c-5.7,1-10.6,0-14.7-3s-6.6-7-7.5-12.2c-0.7-3.8-0.4-7.5,0.8-11.2s3.5-6.8,6.7-9.3s6.8-4.1,10.8-4.8c5.3-0.9,10,0.1,14.2,3c4.2,3,6.8,6.9,7.6,11.9c0.7,4,0.4,7.8-1,11.5s-3.7,6.8-6.8,9.4C343.5,335.5,340.1,337,336.4,337.7z"/><path class="st1" d="M521.9,432.6l-0.1-158.4l39.9-7l0.2,119l62.1-11l-0.1,39.4L521.9,432.6L521.9,432.6z"/><path class="st1" d="M691.5,402.7l-0.2-115.6l26.3-4.6l5.2,10.2l1.1-0.2c2.5-4.7,6-8.7,10.5-12.2c4.5-3.4,9.9-5.7,16-6.8c9.1-1.6,17.1-0.7,24,2.7s12.2,8.7,15.9,15.9s5.6,15.7,5.6,25.5v66.8l-37.1,6.5l-0.1-63.6c-0.2-3.6-0.9-6.9-2.1-9.8c-1.2-3-3.1-5.1-5.8-6.4c-2.6-1.3-5.7-1.7-9.2-1.1c-2.6,0.5-5.1,1.5-7.5,3.2c-2.3,1.7-4,4.1-5.1,7.1c-1,3.1-1.6,6.3-1.6,9.8l0.1,66.3L691.5,402.7L691.5,402.7z"/><polygon class="st1" points="916.2,363.2 881.3,310.3 913.6,248 872.6,255.2 847.5,305.1 847.6,216.8 811.4,223.2 811.3,381.6 847.5,375.2 847.5,324.8 875.7,370.2 "/><path class="st1" d="M638.5,412.1l-0.2-115.6l36.2-6.4l0.2,115.6L638.5,412.1z"/><polygon class="st1" points="609.5,255.6 653.9,279.6 706,199.2 "/><path class="st1" d="M438.3,411.2c-1.4,2.4-3.4,4.6-5.9,6.8c-2.6,2.2-5.8,3.6-9.8,4.3c-3.7,0.6-7.2,0.3-10.5-1s-6-3.5-8-6.7c-1.3-2.1-2.4-4.6-3.2-7.5l73.9-13c0.4-2.9,0.6-6.2,0.7-9.7c0.1-3.6-0.2-7-0.8-10.4c-1.7-9.8-5.5-18.2-11.3-25c-5.8-6.9-12.8-11.8-20.9-14.6c-8.1-2.9-16.7-3.5-25.8-1.9c-11.4,2-21.3,7-29.7,14.9c-8.4,7.9-14.4,17.4-18.1,28.5c-3.6,11.1-4.5,22.1-2.6,32.9c1.8,10.1,5.6,18.8,11.5,26c5.9,7.3,13,12.5,21.3,15.6s17.5,3.8,27.4,2.1c8.5-1.5,16-4.4,22.6-8.7c6.6-4.3,12-9.8,16.2-16.3c3.5-5.3,6.1-10.7,7.9-16.2L438.3,411.2L438.3,411.2z M406.5,369.6c3.3-4.1,7.5-6.6,12.5-7.5c3.8-0.7,7.3-0.3,10.5,1s5.7,3.4,7.7,6.2c1.8,2.6,3,5.5,3.6,8.6l-40.9,7.2l0.1-0.5C401,378.7,403.2,373.7,406.5,369.6L406.5,369.6z"/><path class="st1" d="M1018.4,278.1c-1.7-9.8-5.5-18.2-11.3-25c-5.8-6.9-12.8-11.8-20.9-14.6c-8.1-2.9-16.7-3.5-25.8-1.9c-11.4,2-21.3,7-29.7,14.9s-14.4,17.4-18.1,28.5c-3.6,11.1-4.5,22.1-2.6,32.9c1.8,10.1,5.6,18.8,11.5,26c5.9,7.3,13,12.5,21.3,15.6s17.5,3.8,27.4,2.1c8.5-1.5,16-4.4,22.6-8.7c6.6-4.3,12-9.8,16.2-16.3c3.5-5.3,6.1-10.7,7.9-16.2h-35c-1.4,2.4-3.4,4.5-5.8,6.7c-2.6,2.2-5.8,3.6-9.8,4.3c-3.7,0.6-7.2,0.3-10.5-1s-6-3.5-8-6.7c-1.3-2.1-2.4-4.6-3.2-7.5l73.9-13c0.4-2.9,0.6-6.2,0.7-9.7C1019.3,284.9,1019,281.5,1018.4,278.1z M943.6,289.2l0.1-0.5c1-5.8,3.2-10.9,6.5-15l0,0c3.3-4.1,7.5-6.6,12.5-7.5c3.8-0.7,7.3-0.3,10.5,1s5.7,3.4,7.7,6.2c1.8,2.6,3,5.5,3.6,8.6L943.6,289.2z"/></svg>')
}
</style>
