document.addEventListener("DOMContentLoaded", ()=>{
const $boton = document.querySelector("#btn-reporte");
$boton.addEventListener("click",()=>{
	const $elementoParaConvertir = document.querySelector('#chartContainer');
	html2pdf()
		.set({
			margin: 1,
			filename: 'rp_regalos.pdf',
			image:{
				type:'jpeg',
				quality:0.98
			},
			html2canvas:{
				scale:3,
				letterRendering: true
			},
			jsPDF:{
				unit: "in",
				format: "a4",
				orientation: 'portrait'
			}
		})
		.from($elementoParaConvertir)
		.save()
		.catch(err => console.log(err))
		.finally()
		.then(()=>{
			console.log("guardado")
		})
	});
});
