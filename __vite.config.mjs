// vite.config.js
import { defineConfig } from "vite";
import path from "path";

export default defineConfig({
	// Не указываем root — будем управлять входами вручную
	// root: "local/templates/kovry-online/",
	// publicDir: "local/templates/kovry-online/public",
	build: {
		rollupOptions: {
			input: {
				// Главный файл шаблона
				template: "local/templates/kovry-online/template_styles.scss",

				// Компоненты — добавляйте по мере необходимости
				catalogItem:
					"local/templates/kovry-online/components/bitrix/catalog.item/.default/style.scss",
				// news: 'local/components/bitrix/news.list/templates/.default/scss/style.scss',
				// Добавьте другие компоненты при необходимости
			},
			output: {
				// Куда сохранять
				// entryFileNames: "assets/[name].js", // если есть JS
				// chunkFileNames: "assets/[name].js",

				assetFileNames: (assetInfo) => {
					// console.log(assetInfo);
					const fileName = assetInfo.names?.[0];

					// if (fileName.match(/\.(svg)$/i)) {
					// 	console.log("IMAGE:", fileName);
					// 	// return "local/templates/kovry-online/assets/fonts/[name].[ext]";
					// }

					// if (fileName.match(/\.(woff|woff2)$/i)) {
					// 	console.log("FONT:", fileName);
					// 	// return "local/templates/kovry-online/assets/fonts/[name].[ext]";
					// }
					if (fileName.match(/\.(css)$/i)) {
						if (fileName.includes("catalogItem")) {
							return "local/templates/kovry-online/components/bitrix/catalog.item/.default/style.css";
						}
						return "local/templates/kovry-online/template_styles.css";
					}

					return `local/templates/kovry-online/assets/[name].[ext]`;
					// return;
				},
			},
		},
		outDir: ".", // сохраняем прямо в проекте, не в dist
		emptyOutDir: false,
	},

	// Алиасы
	resolve: {
		alias: {
			"@scss-root": path.resolve(
				__dirname,
				"local/templates/kovry-online/assets/scss",
			),
			"@scss-components": path.resolve(
				__dirname,
				"local/templates/kovry-online/assets/scss/components",
			),
			"@template": path.resolve(__dirname, "local/templates/kovry-online"),
			"@assets": path.resolve(__dirname, "local/templates/kovry-online/assets"),
			"@img": path.resolve(
				__dirname,
				"local/templates/kovry-online/assets/img",
			),
		},
	},

	// Препроцессор
	css: {
		preprocessorOptions: {
			scss: {
				api: "modern-compiler",
			},
		},
	},
});
