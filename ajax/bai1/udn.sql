create database udn;
use udn;
create table sinhvien(
	masv text,
    hoten varchar(100),
    lop varchar(100),
    diachi varchar(100),
    matkhau varchar(100)
    
);
INSERT INTO sinhvien (masv, hoten, lop, diachi, matkhau)
VALUES
    ('SV001', 'Nguyen Van A', 'A1', 'Quan 1, TP.HCM', 'mk123'),
    ('SV002', 'Tran Thi B', 'A2', 'Quan 2, TP.HCM', 'mk456'),
    ('SV003', 'Le Van C', 'B1', 'Quan 3, TP.HCM', 'mk789'),
    ('SV004', 'Pham Thi D', 'B2', 'Quan 4, TP.HCM', 'mkabc'),
    ('SV005', 'Hoang Van E', 'C1', 'Quan 5, TP.HCM', 'mkdef'),
    ('SV006', 'Nguyen Thi F', 'C2', 'Quan 6, TP.HCM', 'mkggg'),
    ('SV007', 'Tran Van G', 'D1', 'Quan 7, TP.HCM', 'mkhhh'),
    ('SV008', 'Le Thi H', 'D2', 'Quan 8, TP.HCM', 'mkiii'),
    ('SV009', 'Vo Van I', 'E1', 'Quan 9, TP.HCM', 'mkjjj'),
    ('SV010', 'Bui Van K', 'E2', 'Quan 10, TP.HCM', 'mkkkk');
