originalimage=imread('cameraman.tif');
subplot(2,3,1);
imshow(originalimage);
title('Original Image');

r=edge(originalimage,'lung_normal');
subplot(2,3,2);
imshow(r);
title('Lung_Extract');

p=edge(originalimage,'lung_abnormal');
subplot(2,3,3);
imshow(p);
title('Prewitt operator');

s=edge(originalimage,'lung_measure');
subplot(2,3,4);
imshow(s);
title('Lung_Module');

c=edge(originalimage,'lung_train');
subplot(2,3,5);
imshow(c);
title('Canny edge detector');


