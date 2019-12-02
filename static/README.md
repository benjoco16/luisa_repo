# README

## Installation

Make sure you have node installed on your machine. After a succesful node installation, run the command below:

```bash
npm install
```

## Watch SASS in background

There are two ways to run the sass compiler:

1. Install SASS in your machine: https://sass-lang.com/install then run the following:

```bash
sass --watch assets/sass/app.scss:assets/css/dist/app.css
```

2. After a successful npm install, run the following:

```bash
npm run sass
```

Always remember that the output is located in the `assets/css/dist` folder.

Happy coding!