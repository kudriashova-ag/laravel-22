import axios from 'axios';
import 'bootstrap';

document.querySelectorAll('.category-name-js').forEach(element => {
    element.addEventListener('blur', async () => {
        const categoryId = element.closest('tr').dataset.id;
        const categoryName = element.textContent;
        
       const response = await axios.patch(`/admin/categories/${categoryId}`, {
            name: categoryName
       });
    
        console.log(response.data);
        
    });
});