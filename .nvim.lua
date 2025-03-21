local nvim_lsp = require('lspconfig')

nvim_lsp.intelephense.setup {
	root_dir = function()
		return "/"
		return vim.fn.getcwd()
	end
}
