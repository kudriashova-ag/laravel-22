import 'bootstrap';
import { api } from './api';

document.querySelectorAll('.category-name-js').forEach(element => {
    element.addEventListener('blur', async () => {
        const categoryId = element.closest('tr').dataset.id;
        const categoryName = element.textContent;
        
        const response = await api.patch(`categories/${categoryId}`, {
            name: categoryName
       });
    
        console.log(response.data);
        
    });
});