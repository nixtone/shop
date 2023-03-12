# БД  

### Category  
id  
name  
translit  
active  
created_at  

### Tag  
id  
name  
translit  
created_at  

### Post  
id  
name  
translit  
anons  
text  
active  
created_at  

### Product  
id  
name  
translit  
price  
descr  
category_id (fk)  
active  
created_at  

### PostTag  
post_id (fk)  
tag_id (fk)  
