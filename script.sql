USE [master]
GO
/****** Object:  Database [Cantieroni]    Script Date: 18/11/2022 18:38:10 ******/
CREATE DATABASE [Cantieroni]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'Cantieroni', FILENAME = N'Y:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\Cantieroni.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'Cantieroni_log', FILENAME = N'Y:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\Cantieroni_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [Cantieroni] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [Cantieroni].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [Cantieroni] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [Cantieroni] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [Cantieroni] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [Cantieroni] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [Cantieroni] SET ARITHABORT OFF 
GO
ALTER DATABASE [Cantieroni] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [Cantieroni] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [Cantieroni] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [Cantieroni] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [Cantieroni] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [Cantieroni] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [Cantieroni] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [Cantieroni] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [Cantieroni] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [Cantieroni] SET  DISABLE_BROKER 
GO
ALTER DATABASE [Cantieroni] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [Cantieroni] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [Cantieroni] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [Cantieroni] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [Cantieroni] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [Cantieroni] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [Cantieroni] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [Cantieroni] SET RECOVERY FULL 
GO
ALTER DATABASE [Cantieroni] SET  MULTI_USER 
GO
ALTER DATABASE [Cantieroni] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [Cantieroni] SET DB_CHAINING OFF 
GO
ALTER DATABASE [Cantieroni] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [Cantieroni] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [Cantieroni] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [Cantieroni] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'Cantieroni', N'ON'
GO
ALTER DATABASE [Cantieroni] SET QUERY_STORE = OFF
GO
USE [Cantieroni]
GO
/****** Object:  Table [dbo].[Attivita]    Script Date: 18/11/2022 18:38:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Attivita](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_lavoratore] [int] NOT NULL,
	[id_cantiere] [int] NOT NULL,
	[inizio] [datetime] NOT NULL,
	[fine] [datetime] NOT NULL,
	[note] [varchar](128) NULL,
 CONSTRAINT [PK_Attivita] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Azienda]    Script Date: 18/11/2022 18:38:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Azienda](
	[idAzienda] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](50) NOT NULL,
	[indirizzo] [varchar](50) NOT NULL,
	[citta] [varchar](50) NOT NULL,
	[provincia] [varchar](2) NOT NULL,
	[partita_iva] [varchar](11) NOT NULL,
	[titolare] [int] NULL,
 CONSTRAINT [PK_Azienda] PRIMARY KEY CLUSTERED 
(
	[idAzienda] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Cantiere]    Script Date: 18/11/2022 18:38:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Cantiere](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](36) NOT NULL,
	[indirizzo] [varchar](50) NOT NULL,
	[citta] [varchar](36) NOT NULL,
	[provincia] [varchar](2) NOT NULL,
	[data_inizio] [date] NULL,
	[data_fine] [date] NULL,
	[capocantiere] [int] NULL,
	[descrizione] [varchar](128) NULL,
 CONSTRAINT [PK_Cantiere] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Personale]    Script Date: 18/11/2022 18:38:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Personale](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](50) NOT NULL,
	[cognome] [varchar](50) NOT NULL,
	[email] [varchar](64) NULL,
	[telefono] [varchar](10) NULL,
	[via] [varchar](50) NOT NULL,
	[citta] [varchar](50) NOT NULL,
	[idRuolo] [int] NULL,
	[idAzienda] [int] NULL,
 CONSTRAINT [PK_Personale] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Ruolo]    Script Date: 18/11/2022 18:38:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Ruolo](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[descrizione] [varchar](32) NULL,
	[isAdmin] [tinyint] NULL,
	[gestioneCantiere] [tinyint] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Attivita]  WITH CHECK ADD  CONSTRAINT [FK_Attivita_Personale] FOREIGN KEY([id])
REFERENCES [dbo].[Personale] ([id])
GO
ALTER TABLE [dbo].[Attivita] CHECK CONSTRAINT [FK_Attivita_Personale]
GO
ALTER TABLE [dbo].[Attivita]  WITH NOCHECK ADD  CONSTRAINT [FK_Personale] FOREIGN KEY([id])
REFERENCES [dbo].[Cantiere] ([id])
NOT FOR REPLICATION 
GO
ALTER TABLE [dbo].[Attivita] CHECK CONSTRAINT [FK_Personale]
GO
ALTER TABLE [dbo].[Azienda]  WITH CHECK ADD  CONSTRAINT [FK_Azienda_Personale] FOREIGN KEY([idAzienda])
REFERENCES [dbo].[Personale] ([id])
GO
ALTER TABLE [dbo].[Azienda] CHECK CONSTRAINT [FK_Azienda_Personale]
GO
ALTER TABLE [dbo].[Cantiere]  WITH CHECK ADD  CONSTRAINT [FK_Cantiere_Personale] FOREIGN KEY([id])
REFERENCES [dbo].[Personale] ([id])
GO
ALTER TABLE [dbo].[Cantiere] CHECK CONSTRAINT [FK_Cantiere_Personale]
GO
ALTER TABLE [dbo].[Personale]  WITH CHECK ADD  CONSTRAINT [FK_Personale_Azienda] FOREIGN KEY([id])
REFERENCES [dbo].[Azienda] ([idAzienda])
GO
ALTER TABLE [dbo].[Personale] CHECK CONSTRAINT [FK_Personale_Azienda]
GO
ALTER TABLE [dbo].[Personale]  WITH CHECK ADD  CONSTRAINT [FK_Personale_Ruolo] FOREIGN KEY([id])
REFERENCES [dbo].[Ruolo] ([id])
GO
ALTER TABLE [dbo].[Personale] CHECK CONSTRAINT [FK_Personale_Ruolo]
GO
USE [master]
GO
ALTER DATABASE [Cantieroni] SET  READ_WRITE 
GO
