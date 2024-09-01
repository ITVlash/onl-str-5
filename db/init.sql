USE test;

CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('ADMIN', 'USER') NOT NULL
);

CREATE TABLE IF NOT EXISTS Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    article INT NOT NULL UNIQUE,
    info VARCHAR(1023) NOT NULL
);

CREATE TABLE IF NOT EXISTS Baskets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (product_id) REFERENCES Products(id)
);

INSERT INTO Products (name, url, price, article, info) VALUES
('Диван Баден NEXT', 'Диван Баден NEXT', 89999, 1001,
'Основные размеры товара : 189 x 105 x 90 см
Масса : 100 кг
Спальное место : 138 x 189 см
Цвет : Синий деним
Форма : Прямой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Клик-кляк
Ящик для белья : Да
Нагрузка : 180
Высота посадочного места : 4
Стиль : Современный
Обивка : Ткань'
),
('Диван Гамбург', 'Диван Гамбург', 79999, 1002,
'Основные размеры товара : 246 x 108 x 70 см
Масса : 104.5 кг
Спальное место : 152 x 202 см
Цвет : Ментоловый
Форма : Прямой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Тик-так
Ящик для белья : Да
Высота посадочного места : 44
Стиль : Неоклассика
Обивка : Ткань'
),
('Диван Каприо NEXT 22', 'Диван Каприо NEXT 22', 45999, 1003,
'Основные размеры товара : 221 x 115 x 95 см
Масса : 109 кг
Спальное место : 157 x 201 см
Цвет : Синий деним
Форма : Прямой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Тик-так
Ящик для белья : Да
Нагрузка : 300
Высота посадочного места : 50
Стиль : Скандинавский
Обивка : Ткань'
),
('Диван Кенвуд', 'Диван Кенвуд', 67999, 1004,
'Основные размеры товара : 219 x 94 x 96 см
Масса : 95.5 кг
Спальное место : 145 x 195 см
Цвет : Светло-зеленый
Форма : Прямой диван
Каркас : Фанера, ДВП
Механизм : Да
Вид механизма : Еврокнижка
Ящик для белья : Да
Высота посадочного места : 45
Стиль : Скандинавский
Обивка : Ткань'
),
('Диван Лагом', 'Диван Лагом', 54999, 1005,
'Основные размеры товара : 170 x 80 x 84 см
Масса : 37 кг
Цвет : Какао
Форма : Прямой диван
Каркас : ДСП, Фанера
Вид механизма : Без механизма
Нагрузка : 200
Стиль : Скандинавский
Обивка : Ткань'
),
('Диван Маджента NEXT', 'Диван Маджента NEXT', 99999, 1006,
'Основные размеры товара : 224 x 114 x 96 см
Масса: 114.6 кг
Спальное место : 154 x 202 см
Цвет : Изумрудный
Форма : Прямой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Тик-так
Ящик для белья : Да
Нагрузка : 240
Высота посадочного места : 48
Стиль : Скандинавский
Обивка : Ткань'
),
('Диван Нойс NEXT 120', 'Диван Нойс NEXT 120', 129999, 1007,
'Основные размеры товара : 163 x 110 x 97 см
Масса : 93.48 кг
Спальное место : 124 x 207 см
Цвет : Серый
Форма : Прямой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Аккордеон
Нагрузка : 240
Высота посадочного места : 49
Стиль : Скандинавский
Обивка : Ткань'
),
('Диван Стокгольм NEXT', 'Диван Стокгольм NEXT', 64999, 1008,
'Основные размеры товара : 227 x 115 x 95 см
Масса : 110 кг
Спальное место : 152 x 201 см
Цвет : Светло-зеленый
Форма : Прямой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Тик-так
Ящик для белья : Да
Нагрузка : 300
Высота посадочного места : 47
Стиль : Скандинавский
Обивка : Ткань'
),
('Диван угловой Каприо NEXT 22', 'Диван угловой Каприо NEXT 22', 69999, 1009,
'Основные размеры товара : 228 x 160 x 95 см
Масса : 117.5 кг
Спальное место : 154 x 208 см
Цвет : Морская волна
Форма : Угловой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Тик-так
Ящик для белья : Да
Нагрузка : 300
Высота посадочного места : 50
Стиль : Скандинавский
Обивка : Ткань'
),
('Диван угловой Стокгольм NEXT', 'Диван угловой Стокгольм NEXT', 149999, 1010,
'Основные размеры товара : 233 x 158 x 95 см
Масса : 124.5 кг
Спальное место : 152 x 207 см
Цвет : Светло-горчичный
Форма : Угловой диван
Каркас : Металлокаркас
Механизм : Да
Вид механизма : Тик-так
Ящик для белья : Да
Нагрузка : 300
Высота посадочного места : 47
Стиль : Скандинавский
Обивка : Ткань'
);