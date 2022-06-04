create table team(
    id int not null,
    teamName char not null,
    gameCount tinyint not null,
    gainPoint smallint not null,
    won tinyint not null,
    drawn tinyint not null,
    lost tinyint not null,
    gainGoal smallint not null,
    loseGoal smallint not null,
    goalGap smallint not null,
    rank tinyint not null,
    primary key(id)
);