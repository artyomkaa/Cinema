/*==============================================================*/
/* Table: FILM                                                  */
/*==============================================================*/
create table FILM 
(
	ID_FILM             SMALLINT not null primary key,
	TITRE               VARCHAR(50) not null,
	RESUME              VARCHAR(1000) not null,
	DUREE               SMALLINT not null,
	PUBLIC_CIBLE		SMALLINT not null,
	SAMPLE				VARCHAR(1000) not null,
	IMG					VARCHAR(1000) not null
);
/*==============================================================*/
/* Table: SALLE                                                 */
/*==============================================================*/
create table SALLE
{
	ID_SALLE			SMALLINT not null primary key,
	NAME				VARCHAR(50) not null,
	ROW_NUM				SMALLINT not null,
	PLACE_NUM			SMALLINT not null,
	INDICAPE			TINYINT not null,
	_3D					TINYINT not null,
	_2D					TINYINT not null
};
/*==============================================================*/
/* Table: SEANCE                                                */
/*==============================================================*/
create table SEANCE
{
	ID_SEANCE			SMALLINT not null primary key,
	ID_FILM				SMALLINT not null,
	ID_SALLE			SMALLINT not null,
	S_TIME				datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
	foreign key (ID_FILM) references FILM(ID_FILM),
	foreign key (ID_SALLE) references SALLE(ID_SALLE)
};
/*==============================================================*/
/* Table: PLACE                                                 */
/*==============================================================*/
create table PLACE
{
	ID_PLACE			SMALLINT not null primary key,
	ID_SEANCE			SMALLINT not null,
	ID_SALLE			SMALLINT not null,
	PLACE_ROW			SMALLINT not null,
	PLACE_NUM			SMALLINT not null,
	foreign key (ID_SEANCE) references SEANCE(ID_SEANCE),
	foreign key (ID_SALLE) references SALLE(ID_SALLE)
};
/*==============================================================*/
/* Table: BOOKING                                               */
/*==============================================================*/
create table BOOKING
{
	ID_BOOKING			SMALLINT not null primary key,
	ID_PLACE			SMALLINT not null,
	foreign key (ID_PLACE) references PLACE(ID_PLACE)
};
/*==============================================================*/
/* Sequence: FILM_SEQUENCE                                      */
/*==============================================================*/
create sequence FILM_SEQUENCE                                     
	start with 1000                                            
	increment by 1                                             
	maxvalue 1999                                              
	minvalue 1000                                              
	nocycle;    
/*==============================================================*/
/* Sequence: SALLE_SEQUENCE                                     */
/*==============================================================*/
create sequence SALLE_SEQUENCE                                     
	start with 2000                                            
	increment by 1                                             
	maxvalue 2999                                              
	minvalue 2000                                              
	nocycle;  
/*==============================================================*/
/* Sequence: SEANCE_SEQUENCE                                    */
/*==============================================================*/
create sequence SEANCE_SEQUENCE                                     
	start with 3000                                            
	increment by 1                                             
	maxvalue 3999                                              
	minvalue 3000                                              
	nocycle; 
/*==============================================================*/
/* Sequence: PLACE_SEQUENCE                                     */
/*==============================================================*/
create sequence PLACE_SEQUENCE                                     
	start with 4000                                            
	increment by 1                                             
	maxvalue 4999                                              
	minvalue 4000                                              
	nocycle; 	
/*==============================================================*/
/* Sequence: BOOKING_SEQUENCE                                   */
/*==============================================================*/
create sequence BOOKING_SEQUENCE                                     
	start with 5000                                            
	increment by 1                                             
	maxvalue 5999                                              
	minvalue 5000                                              
	nocycle; 