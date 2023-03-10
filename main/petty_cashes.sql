create table petty_cashes
(
    id                      INTEGER not null
        primary key autoincrement,
    request_id              varchar not null,
    user_id                 INTEGER not null,
    department_id           INTEGER not null,
    reason                  varchar not null,
    hod_status              varchar,
    hod_id                  INTEGER,
    hod_comment             varchar,
    finance_manager_status  varchar,
    finance_manager_id      INTEGER,
    finance_manager_comment varchar,
    amount                  float   not null,
    created_at              datetime,
    updated_at              datetime,
    deleted_at              datetime,
    category_id             INTEGER
);

