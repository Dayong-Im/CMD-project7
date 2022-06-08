use uni;
--서버 배포시 사용

--use sample;

-- 게시판 테이블 생성
create table board (
   num int not null auto_increment,
   id char(15) not null,
   name char(10) not null,
   subject char(200) not null,
   content text not null,        
   regist_day char(20) not null,
   hit int not null,
   file_name char(40),
   file_type char(40),
   file_copied char(40),
   primary key(num)
);

-- 회원 테이블 생성
create table members (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    email char(80),
    regist_day char(20),
    level int,
    point int,
    primary key(num)
);

-- 축구팀 테이블 생성
create table team(
    id int not null,
    teamName varchar(64) not null,
    gameCount tinyint not null,
    gainPoint smallint not null,
    won tinyint not null,
    drawn tinyint not null,
    lost tinyint not null,
    gainGoal smallint not null,
    loseGoal smallint not null,
    goalGap smallint not null,
    rank tinyint not null,
    leagueId tinyint not null,
    logo varchar(255) not null,
    primary key(id)
)default character set utf8 collate utf8_general_ci;