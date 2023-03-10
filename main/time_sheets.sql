create table time_sheets
(
    id            INTEGER not null
        primary key autoincrement,
    tasks         TEXT    not null,
    tasks_date    datetime,
    status        varchar,
    user_id       INTEGER not null,
    department_id INTEGER not null,
    task_id       varchar not null,
    hod_id        INTEGER,
    comment       varchar,
    created_at    datetime,
    updated_at    datetime,
    deleted_at    datetime
);

