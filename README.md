# wp-plane-tpl
## wordpress、プレーンテーマ
Sage 9.0.0-alpha.4  
bootstrap v4.0  
slick carousel  
font awesome  
animate css  

https://ja.wordpress.org/  
https://roots.io/sage/  
https://getbootstrap.com/  
http://kenwheeler.github.io/slick/  
https://fontawesome.com/  
https://daneden.github.io/animate.css/  

### インストール
``$ composer create-project roots/sage your-theme-name 9.0.0-alpha.4``   
``$ yarn add bootstrap -v 4.0.0``  
``$ yarn add slick-carousel``  
``$ yarn add animate-sass --dev``  

### ビルド
``$ yarn run start`` — Compile assets when file changes are made, start Browsersync session  
``$ yarn run build`` — Compile and optimize the files in your assets directory  
``$ yarn run build:production`` — Compile assets for production  
