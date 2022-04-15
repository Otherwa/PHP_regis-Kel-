![download](https://user-images.githubusercontent.com/67428572/163125682-be729cb1-e01b-4532-a005-8cc42b9def89.png)

![download](https://user-images.githubusercontent.com/67428572/163125865-40f93fdc-69b2-48ae-ae2e-5a6c2e726fbf.png)

![download](https://user-images.githubusercontent.com/67428572/163125996-f147491c-141f-401a-a808-da535c22fd95.png)

# PHP_regis-Kel-.

Registration form using php 

## Prequiste.

- >Scratch Html
- >tailwindcss
- >Js

### Domians.

- form layout present in css/style.css.
- standard js present in js/main.js.
- tailwind css for easy implementation.
- required doubts commented in each sub-file.

# Instructions

- `Main Directory` consists of all basic static pages needed to render , the index.html redirects to formto.php in `Php Directory`
- `Php Directory\formto.php` uses sql connect to fill respective data to Mysql backend
- after fillup is compeleted again redirected to `Main Directory\formsub.html` (3 sec) wait -> `index.html`
- Done.

#### Database (MySql) Constraints.

`Database name 'regis_dat' table 'form_fillup' for storing feedbacks`

##### table constraints. (Temp/[Update when Schema acq])
`form_fillup`
- Id int.
- Name varchar.
- Review varchar.
- Date Timestamp (current).

`form_num`
- Id int.
- Phone varchar
- User_id int (Id - form_fillup)

## styling

- Tailwind Css [documentation](https://tailwindcss.com/docs/installation)
- Scratch Css.

# Preview

![ssj1](https://user-images.githubusercontent.com/67428572/163563487-7c2512ab-dcc6-45a4-b89a-63b8f02e2a9f.png)
![ssj2](https://user-images.githubusercontent.com/67428572/163079320-1902922d-1ce9-44fc-96da-68f8819dfa16.png)
![ssj3](https://user-images.githubusercontent.com/67428572/163079326-1c8c7da9-5ff8-4dfb-b675-1de29571904f.png)
![ssj4](https://user-images.githubusercontent.com/67428572/163079477-e497d636-22cb-4204-803f-7c77ba767d3a.png)
![ssj5](https://user-images.githubusercontent.com/67428572/163398910-182d1bb5-3708-4c71-90af-5b19d2e753c4.png)

## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)


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

Any additional information goes here

## Color Reference

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Black | ![#0a192f](https://via.placeholder.com/10/0a192f?text=+) #0a192f |
| Cyan | ![#f8f8f8](https://via.placeholder.com/10/f8f8f8?text=+) #f8f8f8 |
| Cyan | ![#00b48a](https://via.placeholder.com/10/00b48a?text=+) #00b48a |
| Also Cyan| ![#00d1a0](https://via.placeholder.com/10/00b48a?text=+) #00d1a0 |

