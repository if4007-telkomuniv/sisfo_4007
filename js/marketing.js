const bannerBtn = document.getElementById('banner')
const aboutBtn = document.getElementById('about')
const articleBtn = document.getElementById('article')

const articleForm = document.getElementById('articleForm')
const bannerForm = document.getElementById('bannerForm')
const aboutForm = document.getElementById('aboutForm')

bannerBtn.addEventListener('click',()=>{
    if(bannerForm.classList.contains('d-none')){
        if(!articleForm.classList.contains('d-none')){
            articleForm.classList.toggle('d-none')
        }
        if(!aboutForm.classList.contains('d-none')){
            aboutForm.classList.toggle('d-none')
        }
        bannerForm.classList.toggle('d-none')
    }else{
        if(!articleForm.classList.contains('d-none')){
            articleForm.classList.toggle('d-none')
        }
        if(!aboutForm.classList.contains('d-none')){
            aboutForm.classList.toggle('d-none')
        }
    }
})

aboutBtn.addEventListener('click',()=>{
    if(aboutForm.classList.contains('d-none')){
        if(!articleForm.classList.contains('d-none')){
            articleForm.classList.toggle('d-none')
        }
        if(!bannerForm.classList.contains('d-none')){
            bannerForm.classList.toggle('d-none')
        }
        aboutForm.classList.toggle('d-none')
    }else{
        if(!articleForm.classList.contains('d-none')){
            articleForm.classList.toggle('d-none')
        }
        if(!bannerForm.classList.contains('d-none')){
            bannerForm.classList.toggle('d-none')
        }
    }
})

articleBtn.addEventListener('click',()=>{
    if(articleForm.classList.contains('d-none')){
        if(!bannerForm.classList.contains('d-none')){
            bannerForm.classList.toggle('d-none')
        }
        if(!aboutForm.classList.contains('d-none')){
            aboutForm.classList.toggle('d-none')
        }
        articleForm.classList.toggle('d-none')
    }else{
        if(!bannerForm.classList.contains('d-none')){
            bannerForm.classList.toggle('d-none')
        }
        if(!aboutForm.classList.contains('d-none')){
            aboutForm.classList.toggle('d-none')
        }
    }
})