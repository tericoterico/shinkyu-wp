// gulpプラグインの読み込み
const gulp = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass");

// style.scssをタスクを作成する
gulp.task("default", function() {
	return gulp.watch("shinkyu/scss/**/*.scss", function() {
		// style.scssファイルを取得
		return (
		  gulp
			.src("shinkyu/scss/*.scss")
			// Sassのコンパイルを実行
			.pipe(
			  sass({
				outputStyle: "expanded",
				includePaths: ['node_modules/breakpoint-sass/stylesheets'],
			  })
				// Sassのコンパイルエラーを表示
				// (これがないと自動的に止まってしまう)
				.on("error", sass.logError)
			)
			// cssフォルダー以下に保存
			.pipe(gulp.dest("shinkyu"))
		);
	});
});