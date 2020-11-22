window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-23581568-13');

function showImage(image1, image2, image3) {
    Swal.mixin({
        width: "50%",
        html: `<img class="fit-picture" style="width:80%;"
                        src="` + image1 + `">`,
        backdrop: `
                    rgba(0,0,123,0.4)
                    url("https://sweetalert2.github.io/images/nyan-cat.gif")
                    left top
                    no-repeat
                `,
        confirmButtonText: 'Suivant &rarr;',
        progressSteps: ['1', '2', '3']
    }).queue([{
        html: `<img class="fit-picture" style="width:60%;" src="` + image1 + `">`
    },
        {
            html: `<img class="fit-picture" style="width:60%;" src="` + image2 + `">`
        },
        {
            html: `<img class="fit-picture" style="width:60%;" src="` + image3 + `">`
        }
    ]);
}

