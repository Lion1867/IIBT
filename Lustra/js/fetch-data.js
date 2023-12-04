const imageLinks = [
    'https://sun9-54.userapi.com/impg/xH5rWJ--BtAchIb88TCUNMAMg423YiVYVSHKeA/V_7kkieZ1Ys.jpg?size=2048x1409&quality=95&sign=dc641acdb5bfcc27708570a1aab46198&type=album',
    'https://sun9-72.userapi.com/impg/RjArMzM4QjuVl9oIZy3UonW5lwEdSP4LC67dkg/M9xqlSpdZ60.jpg?size=1350x900&quality=95&sign=1fb86bd78c0f2b895e3a3016810e934c&type=album',
    'https://sun9-23.userapi.com/impg/oSKHKZXjuESJ8Lukm4SyLGTlO0JUhyFmfRCk4g/J4ZPzvvrFkQ.jpg?size=1280x853&quality=95&sign=b83363516dcd5a8006498e98d83bc144&type=album',
    'https://sun9-13.userapi.com/impg/w09cFiojxPDLHNSMtExtcZ0q6oHxg0qNVb57gA/kItPw-ThqbY.jpg?size=2048x1365&quality=95&sign=09a5062ab00ae049f376f79550420525&type=album',
    'https://sun9-55.userapi.com/impf/c840221/v840221806/34543/0Q90Rxg1k0E.jpg?size=1280x848&quality=96&sign=cf49d26208442a969c3df234e6efe33e&type=album',
    'https://sun9-56.userapi.com/impg/jlDgJjrk0RZ75tSFphmaSLAReRcPoNfVxOARPQ/aw2wQd0Kc2M.jpg?size=1080x1350&quality=96&sign=11ee6755b985e845c2e5d1f3173a811d&type=album',
    'https://sun9-47.userapi.com/impg/-wIDOuWP5W_71V7wtIazX60DREH09ixHlcikcg/p5GyMwl_AjQ.jpg?size=1080x1350&quality=95&sign=92f86c26ea7e8167d58c7d04fc80141a&type=album',
    'https://sun9-70.userapi.com/impg/tPxNI0uF27t17JPKnA11s4DSSoTnFuRTLlivRA/5S40wNXcC_Q.jpg?size=736x482&quality=96&sign=cabeaeb7af88dcfbf77ce69319c6aaa3&type=album',
    'https://sun9-66.userapi.com/impg/fiOG4WsNRIpH5YYoL_PUvx1CSEwks9r1aaW1Rg/P0PuiwjwcgM.jpg?size=2560x1707&quality=95&sign=cf21c951eafaccdb7a82ec981fd60216&type=album',
    'https://sun9-29.userapi.com/impg/0j8sB5E02-zp7aVo4Gyv1ZFmsr-RvNdysbON5w/u6WLGoDeSwk.jpg?size=1280x921&quality=95&sign=0302b7254f58cdf82afec2de13183337&type=album',
    'https://sun9-6.userapi.com/impg/eTA8PBd_RuDID4c-QIZTj4xRU_t_5wnurVzJww/pXzVqeO_D00.jpg?size=1023x683&quality=96&sign=5a063c483077dc42612bec375efac99c&type=album',
    'https://sun9-24.userapi.com/impg/y4xrog6OIXHF7FGvKE0R20avagBBS7F2ydACsw/Qqjfaj0jhqI.jpg?size=1080x1305&quality=95&sign=70ba4b6aa632c11be0d3c8befccf7a34&type=album',
    'https://sun9-72.userapi.com/impg/kfn1taCUDBfEY90xEitzafCJEq4Mhsf4F3EYgw/YkISgWDkK8w.jpg?size=2560x2023&quality=95&sign=13b3c08f72618aa2dd1ef96ef1766108&type=album',
    'https://sun9-74.userapi.com/impg/y-k3nJ5I4EeyzrYTRAFPeaTFO6jes4_oILnQ1g/HXiJPwbynQw.jpg?size=2560x1707&quality=95&sign=5de27b27773b864daa5b3670c923d4f4&type=album',
    'https://sun9-38.userapi.com/impg/8hEcG6JtosA8g2FYGNCTFb9Wv-mbHSdom_94oA/f_2-R-aG120.jpg?size=2048x1365&quality=95&sign=c38e04c5df541b32a785802d1e1e7a62&type=album',
    'https://sun9-17.userapi.com/impg/1QwNHUxmlulVuuMKImdtlMcQOzfH4KEIigrfjA/AVB0UC_evPA.jpg?size=1280x720&quality=95&sign=c491dc6d92b5888c975f7919dfe954f8&type=album',
    'https://sun9-50.userapi.com/impg/Ib0d61EqHHNO62ZtVzgUYeCVYgrT5eGv18v7NA/SIi9ExVqUtI.jpg?size=1714x1143&quality=96&sign=b83da2d044330fd8c54c3106eddae902&type=album',
    'https://sun9-79.userapi.com/impg/WXjG0lkI2lInxOKjZdzSG9bTr6Vwu98BGQPAlA/0kqb906eBCo.jpg?size=2048x1365&quality=95&sign=7790116483bef787cbaefb10ba585b5d&type=album',
    'https://sun9-61.userapi.com/impg/9MQTS5XXH_gG4R4eN0UcZ0VUPyMGSkPbRfLAmg/9ldYsy7LqCQ.jpg?size=1280x960&quality=95&sign=4f7a7193cf90e6c8391f889df34ed19e&type=album',
    'https://sun9-68.userapi.com/impg/9opAL5DYsbQp6kISEFufWSSdeAFyiwxuaiZDkw/_cq5DHnk7hg.jpg?size=1536x2048&quality=95&sign=3907d01ed78b44b998eb7fd9cb3809dc&type=album',    
]


const templatePicture = document.querySelector('#gallery-item').content; // Находим template картинки
const template = templatePicture.querySelector('.gallery-item'); // Находим "внутренности" шаблона
const gallery = document.getElementById("gallery");

const getPhotoTemplate = (imageLink) => {
    const element = template.cloneNode(true); // Копируем внутренности шаблона
    element.querySelector('img').src = imageLink;

    return element;
}


const drawPictures = (photosData) => {
    const fragment = document.createDocumentFragment();

    photosData.forEach((photoObject) => {
        const element = getPhotoTemplate(photoObject);
        fragment.appendChild(element);
    });

    arrayOfPhotos = [...photosData];
    gallery.appendChild(fragment);
}

drawPictures(imageLinks);
