create table  roles(
    id int AUTO_INCREMENT PRIMARY key,
    nombre varchar(50)  not null,
    estado char(1)  not null
);
create table  roles_admin(
    id int AUTO_INCREMENT PRIMARY key,
    estado char(1) not null,
    roles_id int not null,
    admin_id int not null,
    FOREIGN KEY (roles_id) REFERENCES roles(id),
    FOREIGN KEY (admin_id) REFERENCES admin(id)
);

INSERT INTO `roles`( `nombre`, `estado`) VALUES ('admin','1');
INSERT INTO `roles_admin`( `estado`, `roles_id`, `admin_id`) VALUES ('1',1,1);