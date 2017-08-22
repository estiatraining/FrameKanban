/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     10/04/2012 14:22:55                          */
/*==============================================================*/


drop index INDEX_37 on CASEUSE;

drop index INDEX_17 on CASEUSE;

drop index INDEX_16 on CASEUSE;

drop table if exists CASEUSE;

drop index INDEX_36 on FLOW;

drop index INDEX_6 on FLOW;

drop index INDEX_5 on FLOW;

drop table if exists FLOW;

drop index INDEX_29 on HISTTASK;

drop index INDEX_14 on HISTTASK;

drop table if exists HISTTASK;

drop index INDEX_2 on ORGANIZATION;

drop table if exists ORGANIZATION;

drop index INDEX_4 on PROJECT;

drop index INDEX_3 on PROJECT;

drop table if exists PROJECT;

drop index INDEX_34 on SUBFLOW;

drop index INDEX_8 on SUBFLOW;

drop index INDEX_7 on SUBFLOW;

drop table if exists SUBFLOW;

drop index INDEX_33 on TASK;

drop index INDEX_10 on TASK;

drop index INDEX_9 on TASK;

drop table if exists TASK;

drop index INDEX_4 on USER;

drop index INDEX_13 on USER;

drop index INDEX_12 on USER;

drop index INDEX_11 on USER;

drop table if exists USER;

drop index INDEX_18 on USRPROJECT;

drop index INDEX_15 on USRPROJECT;

drop table if exists USRPROJECT;

/*==============================================================*/
/* Table: CASEUSE                                               */
/*==============================================================*/
create table CASEUSE
(
   CAS_ID               int not null auto_increment,
   CAS_USR_ID           int,
   CAS_ORG_ID           int,
   CAS_NAME             varchar(256),
   CAS_DATEINI          date,
   CAS_DATEFIM          date,
   CAS_DESC             text,
   CAS_VALIDATE         bool,
   primary key (CAS_ID)
);

/*==============================================================*/
/* Index: INDEX_16                                              */
/*==============================================================*/
create unique index INDEX_16 on CASEUSE
(
   CAS_ID
);

/*==============================================================*/
/* Index: INDEX_17                                              */
/*==============================================================*/
create index INDEX_17 on CASEUSE
(
   CAS_NAME,
   CAS_DATEINI
);

/*==============================================================*/
/* Index: INDEX_37                                              */
/*==============================================================*/
create index INDEX_37 on CASEUSE
(
   CAS_ORG_ID
);

/*==============================================================*/
/* Table: FLOW                                                  */
/*==============================================================*/
create table FLOW
(
   FLO_ID               int not null auto_increment,
   FLO_PRO_ID           int,
   FLO_ORG_ID           int,
   FLO_NAME             int,
   FLO_ORDEM            smallint,
   FLO_DATEINI          date,
   FLO_DATEFIM          date,
   primary key (FLO_ID)
);

/*==============================================================*/
/* Index: INDEX_5                                               */
/*==============================================================*/
create unique index INDEX_5 on FLOW
(
   FLO_ID
);

/*==============================================================*/
/* Index: INDEX_6                                               */
/*==============================================================*/
create index INDEX_6 on FLOW
(
   FLO_NAME,
   FLO_ORDEM
);

/*==============================================================*/
/* Index: INDEX_36                                              */
/*==============================================================*/
create index INDEX_36 on FLOW
(
   FLO_ORG_ID
);

/*==============================================================*/
/* Table: HISTTASK                                              */
/*==============================================================*/
create table HISTTASK
(
   HIS_ID               int not null auto_increment,
   HIS_USR_ID           int,
   HIS_TAS_ID           int,
   HIS_SUB_ID           int,
   HIS_FLO_ID           int,
   HIS_ORG_ID           int,
   HIS_DATE             date,
   HIS_TIME             time,
   primary key (HIS_ID)
);

/*==============================================================*/
/* Index: INDEX_14                                              */
/*==============================================================*/
create unique index INDEX_14 on HISTTASK
(
   HIS_ID
);

/*==============================================================*/
/* Index: INDEX_29                                              */
/*==============================================================*/
create index INDEX_29 on HISTTASK
(
   HIS_ORG_ID
);

/*==============================================================*/
/* Table: ORGANIZATION                                          */
/*==============================================================*/
create table ORGANIZATION
(
   ORG_ID               int not null auto_increment,
   ORG_NAME             int not null,
   ORG_DATEINI          date,
   ORG_DATEFIM          date,
   primary key (ORG_ID)
);

/*==============================================================*/
/* Index: INDEX_2                                               */
/*==============================================================*/
create index INDEX_2 on ORGANIZATION
(
   ORG_NAME,
   ORG_DATEINI
);

/*==============================================================*/
/* Table: PROJECT                                               */
/*==============================================================*/
create table PROJECT
(
   PRO_ID               int not null auto_increment,
   PRO_ORG_ID           int,
   PRO_NAME             int,
   PRO_DATEINI          date,
   PRO_DATEFIM          date,
   PRO_TYPE             char(1),
   PRO_PRIVATE          bool,
   PRO_DESC             text,
   primary key (PRO_ID)
);

/*==============================================================*/
/* Index: INDEX_3                                               */
/*==============================================================*/
create index INDEX_3 on PROJECT
(
   PRO_NAME,
   PRO_DATEINI
);

/*==============================================================*/
/* Index: INDEX_4                                               */
/*==============================================================*/
create unique index INDEX_4 on PROJECT
(
   PRO_ID
);

/*==============================================================*/
/* Table: SUBFLOW                                               */
/*==============================================================*/
create table SUBFLOW
(
   SUB_ID               int not null auto_increment,
   SUB_FLO_ID           int,
   SUB_ORG_ID           int,
   SUB_NAME             int,
   SUB_DATEINI          date,
   SUB_DATEFIM          date,
   SUB_ORDEM            smallint,
   SUB_LIMITE           smallint,
   primary key (SUB_ID)
);

/*==============================================================*/
/* Index: INDEX_7                                               */
/*==============================================================*/
create unique index INDEX_7 on SUBFLOW
(
   SUB_ID
);

/*==============================================================*/
/* Index: INDEX_8                                               */
/*==============================================================*/
create index INDEX_8 on SUBFLOW
(
   SUB_NAME,
   SUB_ORDEM
);

/*==============================================================*/
/* Index: INDEX_34                                              */
/*==============================================================*/
create index INDEX_34 on SUBFLOW
(
   SUB_ORG_ID
);

/*==============================================================*/
/* Table: TASK                                                  */
/*==============================================================*/
create table TASK
(
   TAS_ID               int not null auto_increment,
   TAS_SUB_ID           int,
   TAS_CAS_ID           int,
   TAS_USR_ID           int,
   TAS_ORG_ID           int,
   TAS_NAME             varchar(256),
   TAS_DATEINI          date,
   TAS_DATEFIM          date,
   TAS_ORDEM            smallint,
   TAS_DESC             text,
   TAS_TYPE             char(1),
   TAS_PROBLEM          bool,
   TAS_URGENT           bool,
   TAS_COLOR            varchar(50),
   primary key (TAS_ID)
);

/*==============================================================*/
/* Index: INDEX_9                                               */
/*==============================================================*/
create unique index INDEX_9 on TASK
(
   TAS_ID
);

/*==============================================================*/
/* Index: INDEX_10                                              */
/*==============================================================*/
create index INDEX_10 on TASK
(
   TAS_NAME,
   TAS_ORDEM
);

/*==============================================================*/
/* Index: INDEX_33                                              */
/*==============================================================*/
create index INDEX_33 on TASK
(
   TAS_ORG_ID
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   USR_ID               int not null auto_increment,
   USR_ORG_ID           int,
   USR_NAME             int,
   USR_LOGIN            int,
   USR_PASS             varchar(256),
   USR_DATEINI          date,
   USR_DATEFIM          date,
   USR_EMAIL            varchar(256),
   USR_TYPE             char(1),
   primary key (USR_ID)
);

/*==============================================================*/
/* Index: INDEX_11                                              */
/*==============================================================*/
create index INDEX_11 on USER
(
   USR_ID
);

/*==============================================================*/
/* Index: INDEX_12                                              */
/*==============================================================*/
create index INDEX_12 on USER
(
   USR_LOGIN,
   USR_PASS
);

/*==============================================================*/
/* Index: INDEX_13                                              */
/*==============================================================*/
create index INDEX_13 on USER
(
   USR_NAME,
   USR_TYPE
);

/*==============================================================*/
/* Index: INDEX_4                                               */
/*==============================================================*/
create index INDEX_4 on USER
(
   USR_ORG_ID
);

/*==============================================================*/
/* Table: USRPROJECT                                            */
/*==============================================================*/
create table USRPROJECT
(
   USP_ID               int not null auto_increment,
   USP_USR_ID           int,
   USP_PRO_ID           int,
   USP_DATEINI          date,
   USP_DATEFIM          date,
   primary key (USP_ID)
);

/*==============================================================*/
/* Index: INDEX_15                                              */
/*==============================================================*/
create unique index INDEX_15 on USRPROJECT
(
   USP_ID
);

/*==============================================================*/
/* Index: INDEX_18                                              */
/*==============================================================*/
create index INDEX_18 on USRPROJECT
(
   USP_USR_ID,
   USP_PRO_ID
);

alter table CASEUSE add constraint FK_REFERENCE_11 foreign key (CAS_USR_ID)
      references USER (USR_ID) on delete restrict on update restrict;

alter table CASEUSE add constraint FK_REFERENCE_19 foreign key (CAS_ORG_ID)
      references ORGANIZATION (ORG_ID) on delete restrict on update restrict;

alter table FLOW add constraint FK_REFERENCE_15 foreign key (FLO_ORG_ID)
      references ORGANIZATION (ORG_ID) on delete restrict on update restrict;

alter table FLOW add constraint FK_REFERENCE_2 foreign key (FLO_PRO_ID)
      references PROJECT (PRO_ID) on delete restrict on update restrict;

alter table HISTTASK add constraint FK_REFERENCE_10 foreign key (HIS_FLO_ID)
      references FLOW (FLO_ID) on delete restrict on update restrict;

alter table HISTTASK add constraint FK_REFERENCE_18 foreign key (HIS_ORG_ID)
      references ORGANIZATION (ORG_ID) on delete restrict on update restrict;

alter table HISTTASK add constraint FK_REFERENCE_5 foreign key (HIS_USR_ID)
      references USER (USR_ID) on delete restrict on update restrict;

alter table HISTTASK add constraint FK_REFERENCE_6 foreign key (HIS_TAS_ID)
      references TASK (TAS_ID) on delete restrict on update restrict;

alter table HISTTASK add constraint FK_REFERENCE_9 foreign key (HIS_SUB_ID)
      references SUBFLOW (SUB_ID) on delete restrict on update restrict;

alter table PROJECT add constraint FK_REFERENCE_1 foreign key (PRO_ORG_ID)
      references ORGANIZATION (ORG_ID) on delete restrict on update restrict;

alter table SUBFLOW add constraint FK_REFERENCE_16 foreign key (SUB_ORG_ID)
      references ORGANIZATION (ORG_ID) on delete restrict on update restrict;

alter table SUBFLOW add constraint FK_REFERENCE_3 foreign key (SUB_FLO_ID)
      references FLOW (FLO_ID) on delete restrict on update restrict;

alter table TASK add constraint FK_REFERENCE_12 foreign key (TAS_CAS_ID)
      references CASEUSE (CAS_ID) on delete restrict on update restrict;

alter table TASK add constraint FK_REFERENCE_13 foreign key (TAS_USR_ID)
      references USER (USR_ID) on delete restrict on update restrict;

alter table TASK add constraint FK_REFERENCE_17 foreign key (TAS_ORG_ID)
      references ORGANIZATION (ORG_ID) on delete restrict on update restrict;

alter table TASK add constraint FK_REFERENCE_4 foreign key (TAS_SUB_ID)
      references SUBFLOW (SUB_ID) on delete restrict on update restrict;

alter table USER add constraint FK_REFERENCE_14 foreign key (USR_ORG_ID)
      references ORGANIZATION (ORG_ID) on delete restrict on update restrict;

alter table USRPROJECT add constraint FK_REFERENCE_7 foreign key (USP_USR_ID)
      references USER (USR_ID) on delete restrict on update restrict;

alter table USRPROJECT add constraint FK_REFERENCE_8 foreign key (USP_PRO_ID)
      references PROJECT (PRO_ID) on delete restrict on update restrict;

