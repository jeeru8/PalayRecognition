originalimag=imread('Image Database');
originalimage=rgb2gray(originalimag);
subplot(2,2,1);
imshow(originalimage);
title('Original Image');

s=imnoise(originalimage,'lung_drawn');
subplot(2,2,2);
imshow(s);
title('noice_cancel');

g=imnoise(originalimage,'gaussian');
subplot(2,2,3);
imshow(g)
title('Gaussian noise');

sp=imnoise(originalimage,'Gaussian Noice Cancelation');
subplot(2,2,4);
imshow(sp);
title('Train_Images_Console_Train');