// vite.config.js
import { defineConfig } from "vite";
import path from "path";

export default defineConfig({
	build: {
		rollupOptions: {
			input: {
				template: "local/templates/kovry-online/template_styles.scss",
				catalogItem:
					"local/templates/kovry-online/components/bitrix/catalog.item/.default/style.scss",
				// news: 'local/components/bitrix/news.list/templates/.default/scss/style.scss',
				// Добавьте другие компоненты при необходимости

				script: "source/js/main.js",
			},
			output: {
				entryFileNames: (assetInfo) => {
					if (assetInfo.name === "script") {
						return "local/templates/kovry-online/assets/main.js";
					}
					return "[name].js";
				},

				assetFileNames: (assetInfo) => {
					// console.log(assetInfo);
					const fileName = assetInfo.names?.[0];

					if (fileName.match(/\.(woff|woff2)$/i)) {
						return "local/templates/kovry-online/assets/fonts/[name].[ext]";
					}

					if (fileName.match(/\.(css)$/i)) {
						if (fileName.includes("catalogItem")) {
							return "local/templates/kovry-online/components/bitrix/catalog.item/.default/style.css";
						}
						return "local/templates/kovry-online/template_styles.css";
					}

					return "local/templates/kovry-online/assets/[name].[ext]";
				},
			},
		},
		outDir: ".", // сохраняем прямо в проекте, не в dist
		emptyOutDir: false,
	},

	// Алиасы
	resolve: {
		alias: {
			"@scss-root": path.resolve(__dirname, "source/scss"),
			"@scss-components": path.resolve(__dirname, "source/scss/components"),
			"@scss-templates": path.resolve(__dirname, "source/scss/templates"),
			// "@template": path.resolve(__dirname, "local/templates/kovry-online"),
			// "@assets": path.resolve(__dirname, "local/templates/kovry-online/assets"),
			"@img": path.resolve(__dirname, "source/img"),
		},
	},

	// Препроцессор
	css: {
		preprocessorOptions: {
			scss: {
				api: "modern-compiler",
				// additionalData: `@import "@/scss/variables.scss";`, // Автоматический импорт переменных
			},
		},
	},
});
