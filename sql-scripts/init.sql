USE virtuales;

CREATE TABLE datos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    edad INT,
    sexo INT,
    carrera INT,
    semestre INT,
    matricula INT,
    fecha_cap DATE,
    fecha_nac DATE,
    lugar_nac VARCHAR(255),
    lugar_proc VARCHAR(255),
    ecivil INT,
    domicilio VARCHAR(255),
    email VARCHAR(255),
    tel VARCHAR(20)
);
