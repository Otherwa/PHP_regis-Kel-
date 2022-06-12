# PHP_regis-Kel-.

Registration form using php 

## Prequiste.

- >Scratch Html
- >tailwindcss
- >Js

![download](https://user-images.githubusercontent.com/67428572/163125682-be729cb1-e01b-4532-a005-8cc42b9def89.png)
![download](https://user-images.githubusercontent.com/67428572/163125865-40f93fdc-69b2-48ae-ae2e-5a6c2e726fbf.png)
![download](https://user-images.githubusercontent.com/67428572/163125996-f147491c-141f-401a-a808-da535c22fd95.png)

[![CodeFactor](https://www.codefactor.io/repository/github/otherwa/php_regis-kel-/badge)](https://www.codefactor.io/repository/github/otherwa/php_regis-kel-)

## For Developement

- XAMPP [documentation](https://www.apachefriends.org/index.html)
- Any IDE. `VSCode`.
- Google Fonts API. [documentaion](https://fonts.google.com/knowledge)
- Tailwind npm/CDN `(temp)`. [documentation](https://tailwindcss.com/docs/installation)

# File Structure

```
|- index.html
|- contact.html
|- about.html
|- notices.html
|- src |
       |- input.css (Tailwindcss Input.)

|- Php |
       |- View |
               |- Account |
                          |- forms.php
                          |- ajaxtemp.php
                          |- pap.php
                          |- student.php
                          |- faculty/php
                          |- formsubmit.php
                          
                         
               
               |- Admin |
                        |- admin.php
                        |- adminlogin.php
                        |- xlxsgen.php
                                                
               
               |-connect.php
|- Js |
      |- admin.js
      |- form.js
      |- main.js
      |- papto.js
      |- fff.js
      |- sss.js
      
|- imgs |
        |- .jpg( all)

|- dist |
        |- output.css (Tailwindcss Output.)
        
|- Css |
       |- nav.css
       |- form.css
       |- style.css
```

# Instructions

- `*/` consists of all basic static pages needed to render , the `index.html` redirects to `Php\View\Forms\formto.php`.
- `Php\View\Forms\formto.php` uses sql connect to fill respective data to Mysql backend
- `*.js` files contain ajax request to fetch data for specific conditions (logic).
- after fillup is compeleted again redirected to `Php Directory\formsub.html` (1 sec) wait -> `index.html`
- Done.
- Each seperate .css file for each components (Name Convention).

#### Database (MySql) Constraints.

`Database name 'kelkar_forms'`
`answerpats` `answersss` `answerfac` for storing feedbacks.

##### Schema
![1213](https://user-images.githubusercontent.com/67428572/169552870-e5ff8c4f-b770-4b39-9b5d-b7e381f1977a.png)

## styling

- Tailwind Css [documentation](https://tailwindcss.com/docs/installation)
- Scratch Css. `present in Css/style.css`

# Preview & Feature

![ss1](https://user-images.githubusercontent.com/67428572/173231279-ff60e720-7a1b-44bb-8198-95f9f5d49f0a.png)
![ss2](https://user-images.githubusercontent.com/67428572/173231280-0e918b60-483a-482b-abfd-5be0de50a46b.png)
![ss3](https://user-images.githubusercontent.com/67428572/173231281-b1068ae3-a2e9-4492-aad1-fc808b0013f6.png)
![ss4](https://user-images.githubusercontent.com/67428572/173231283-969f92fa-c1ec-4c98-9f3e-6b12a802a67b.png)
![ss5](https://user-images.githubusercontent.com/67428572/173231284-75a834e7-4542-4d8d-b625-445f5404c58a.png)
![ss6](https://user-images.githubusercontent.com/67428572/173231285-a79d4f89-32ba-46eb-b9b5-d7280426c78f.png)
![ss7](https://user-images.githubusercontent.com/67428572/173231289-ffc31a87-ed13-479d-a0b5-064027311793.png)
![ss8](https://user-images.githubusercontent.com/67428572/173231290-5f38eccd-2dc8-4ffd-a686-408e940f6033.png)
![ss9](https://user-images.githubusercontent.com/67428572/173231292-e2fb68b7-2b93-4ddf-9cb5-d87ffdf2d329.png)



 [Demo Build](https://form123.epizy.com/)

# In a nut-shell

![](https://www.meme-arsenal.com/memes/a81c61c281b518e3d545aa6dadf2c0b8.jpg)
![](https://www.meme-arsenal.com/memes/d48dec40c8e413c60329cb6784248a13.jpg)
![](https://memegenerator.net/img/instances/61394033/i-know-css.jpg)





## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)

# Status

## [![Repography logo](https://images.repography.com/logo.svg)](https://repography.com) / Recent activity [![Time period](https://images.repography.com/25186133/Otherwa/PHP_regis-Kel-/recent-activity/2d39f7ec9a6a0a126598cef5bd926a77_badge.svg)](https://repography.com)
[![Timeline graph](https://images.repography.com/25186133/Otherwa/PHP_regis-Kel-/recent-activity/2d39f7ec9a6a0a126598cef5bd926a77_timeline.svg)](https://github.com/Otherwa/PHP_regis-Kel-/commits)
[![Issue status graph](https://images.repography.com/25186133/Otherwa/PHP_regis-Kel-/recent-activity/2d39f7ec9a6a0a126598cef5bd926a77_issues.svg)](https://github.com/Otherwa/PHP_regis-Kel-/issues)
[![Pull request status graph](https://images.repography.com/25186133/Otherwa/PHP_regis-Kel-/recent-activity/2d39f7ec9a6a0a126598cef5bd926a77_prs.svg)](https://github.com/Otherwa/PHP_regis-Kel-/pulls)
[![Trending topics](https://images.repography.com/25186133/Otherwa/PHP_regis-Kel-/recent-activity/2d39f7ec9a6a0a126598cef5bd926a77_words.svg)](https://github.com/Otherwa/PHP_regis-Kel-/commits)
[![Top contributors](https://images.repography.com/25186133/Otherwa/PHP_regis-Kel-/recent-activity/2d39f7ec9a6a0a126598cef5bd926a77_users.svg)](https://github.com/Otherwa/PHP_regis-Kel-/graphs/contributors)

## License

Copyright (c) [2022] [Atharv Desai]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

## Appendix

https://www.youtube.com/
