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