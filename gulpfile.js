const browserSync = require("browser-sync");
const { src, dest, watch } = require("gulp");
const autoprefixer = require("autoprefixer");
const path = require("path");
const LoadPlugins = require("gulp-load-plugins");
const $ = LoadPlugins();
const sass = require("gulp-dart-sass");
const pkg = require("./package.json");
const server = browserSync.create();

function imageChange() {
  let count = 1;
  return src("./images-src/*.{jpg,png}")
    .pipe($.imagemin())
    .pipe(
      $.rename((path) => {
        path.basename = "shichifukujin-" + count;
        count++;
      })
    )
    .pipe(dest("./shichifukujin-theme/images"));
}

function styles() {
  const themeInfo = pkg.theme;
  const comment = `
  /*
  Theme Name: ${themeInfo.name}
  Theme URI: ${themeInfo.uri}
  Description: ${themeInfo.description}
  Version: ${themeInfo.version}
  Author: ${themeInfo.author}
  Author URI: ${themeInfo.authorUri}
  License: ${themeInfo.license}
  License URI: ${themeInfo.licenseUri}
  Tags: ${themeInfo.tags.join(", ")}
  Text Domain: ${themeInfo.textDomain}
  Domain Path: ${themeInfo.domainPath}
  */
  `;

  return src("./shichifukujin-theme/styles/style.scss")
    .pipe($.sourcemaps.init())
    .pipe(sass())
    .pipe(
      $.postcss([autoprefixer({ overrideBrowserslist: ["last 2 versions"] })])
    )
    .pipe($.cleanCss())
    .pipe($.header(comment))
    .pipe($.sourcemaps.write("."))
    .pipe(dest("./shichifukujin-theme/"))
    .pipe(browserSync.stream());
}

function startAppServer() {
  browserSync.init({
    proxy: "http://localhost:4013",
    port: 4014,
    files: ["test-theme/**/*.css"],
    notify: false,
  });

  watch("./shichifukujin-theme/**/*.scss", styles);
  watch("./shichifukujin-theme/**/*.php").on("change", browserSync.reload);
}

function jsMinify() {
  return src([
    "./shichifukujin-theme/scripts/libs/*.js",
    "./shichifukujin-theme/scripts/*.js",
    "!./shichifukujin-theme/scripts/libs/*.min.js",
    "!./shichifukujin-theme/scripts/*.min.js",
  ])
    .pipe($.uglify())
    .pipe(
      $.rename({
        extname: ".min.js",
      })
    )
    .pipe(
      $.if(
        (file) => path.basename(file.path) === "main.min.js",
        dest("./shichifukujin-theme/scripts"),
        dest("./shichifukujin-theme/scripts/libs")
      )
    );
}

exports.imageChange = imageChange;
exports.styles = styles;
exports.serve = startAppServer;
exports.javascripts = jsMinify;
