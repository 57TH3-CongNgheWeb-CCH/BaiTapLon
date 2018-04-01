-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 07:36 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caythuoc`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_benh` (IN `intenbenh` VARCHAR(50), IN `inbieuhien` VARCHAR(50), IN `inpp` TEXT)  BEGIN
   INSERT INTO benh(tenbenh, bieuhien, pp)
   VALUES(intenbenh, inbieuhien, inpp);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_thuoc` (IN `inidthuoc` VARCHAR(5), IN `intenthuoc` VARCHAR(50), IN `incongdung` TEXT, IN `innguongoc` VARCHAR(50))  BEGIN
   INSERT INTO thuoc(idthuoc, tenthuoc, nguongoc, congdung) VALUES (inidthuoc , intenthuoc, innguongoc, incongdung);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_thuocbenh` (IN `intenbenh` VARCHAR(50), IN `inidthuoc` VARCHAR(5))  BEGIN
   INSERT INTO thuocbenh(tenbenh, idthuoc)
   VALUES (intenbenh, inidthuoc);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_user` (IN `inEmail` VARCHAR(50), IN `inmatkhau` VARCHAR(20))  BEGIN
   INSERT INTO taikhoan(Email, matkhau)
   VALUES(inEmail, inmatkhau);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_benh` (IN `intenbenh` VARCHAR(50))  BEGIN
   DELETE FROM benh WHERE tenbenh = intenbenh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_thuoc` (IN `inidthuoc` VARCHAR(5))  BEGIN
   DELETE FROM thuoc WHERE idthuoc = inidthuoc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_thuocbenh` (IN `intenbenh` VARCHAR(50), IN `inidthuoc` VARCHAR(5))  BEGIN
   DELETE FROM thuocbenh WHERE tenbenh = intenbenh and idthuoc = inidthuoc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_user` (IN `inEmail` VARCHAR(50))  BEGIN
   DELETE FROM taikhoan WHERE Email = inEmail;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_benh` (IN `intenbenh` VARCHAR(50), IN `inbieuhien` VARCHAR(50), IN `inpp` TEXT, IN `intenbenhcu` VARCHAR(50))  BEGIN
   UPDATE benh
   SET tenbenh = intenbenh, bieuhien = inbieuhien, pp = inpp
   WHERE tenbenh = intenbenhcu;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_thuoc` (IN `inidthuoc` VARCHAR(5), IN `intenthuoc` VARCHAR(50), IN `incongdung` TEXT, IN `innguongoc` VARCHAR(50))  BEGIN
   UPDATE thuoc
   SET tenthuoc = intenthuoc , congdung = incongdung, nguongoc = innguongoc
   WHERE idthuoc = inidthuoc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_thuocbenh` (IN `intenbenh` VARCHAR(50), IN `inidthuoc` VARCHAR(5))  BEGIN
   UPDATE thuocbenh
   SET idthuoc = inidthuoc
   WHERE tenbenh = intenbenh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_user` (IN `inEmailnew` VARCHAR(50), IN `inmatkhaunew` VARCHAR(20))  BEGIN
	UPDATE taikhoan
    SET matkhau = inmatkhaunew
    WHERE Email = inEmailnew;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `benh`
--

CREATE TABLE `benh` (
  `idbenh` varchar(5) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenbenh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `anh` varchar(1000) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `benh`
--

INSERT INTO `benh` (`idbenh`, `tenbenh`, `noidung`, `anh`) VALUES
('1', 'Béo phì', 'thừa cân', ''),
('2', 'Cao huyết áp', 'Cao huyết áp (hay còn được gọi là tăng huyết áp hay là lên tăng-xông, từ chữ Hypertension trong tiếng Pháp) là một bệnh mạn tính trong đó áp lực máu đo được ở động mạch tăng cao. Huyết áp thường được đo bằng hai chỉ số là: huyết áp tâm thu (systolic) và huyết áp tâm trương (diastolic), dựa trên 2 giai đoạn co bóp và giãn nghỉ của cơ tim, tương ứng với áp lực cao nhất và áp lực thấp nhất của dòng máu trong động mạch. Có nhiều quy chuẩn khác nhau về khoảng bình thường của huyết áp. Huyết áp lúc nghỉ thông thường nằm trong khoảng 100-140mmHg huyết áp tâm thu và 60-90mmHg huyết áp tâm trương. Bệnh nhân bị cao huyết áp khi đo huyết áp của bệnh nhân thường xuyên thấy cao hơn hoặc bằng 140/90 mmHg. Tăng huyết áp được phân loại thành tăng huyết áp nguyên phát và thứ phát. \"Tăng huyết áp nguyên phát\" chiếm 90–95% số ca tăng huyết áp, dùng để chỉ các trường hợp không xác định được bệnh nguyên gây tăng huyết áp rõ ràng (vô căn). Khoảng 5–10% số ca còn lại (tăng huyết áp thứ phát) có nguyên nhân là một số bệnh tác động lên thận, động mạch, tim, và hệ nội tiết. Tăng huyết áp gây nhiều áp lực cho tim, có khả năng dẫn đến bệnh tim do tăng huyết áp, bệnh mạch vành. Tăng huyết áp cũng là một yếu tố nguy cơ chính trong: tai biến mạch máu não, suy tim, phình động mạch, bệnh thận mạn, và bệnh động mạch ngoại biên. Ăn kiêng và thay đổi lối sống có thể cải thiện tình trạng huyết áp và giảm nguy cơ xảy ra các biến chứng, mặc dù vậy vẫn có thể cần điều trị kèm bằng thuốc ở những ca mà các biện pháp thay đổi lối sống không có tác dụng hoặc không giảm được đến huyết áp mục tiêu.\r\nĐiều chỉnh lối sống Bước đầu trong điều trị tăng huyết áp phải thay đổi lối sống hợp lý bao gồm: chế độ ăn, tập thể dục, giảm cân. Thay đổi lối sống có thể giảm huyết áp ở một số bệnh nhân. Hiệu quả của chúng tương tự như sử dụng thuốc. Nếu huyết áp vẫn cao phải sử dụng thuốc ngay, khuyến cáo điều trị ở trường hợp này là điều chỉnh lối sống kết hợp với sử dụng thuốc. Chế độ ăn ít muối rất có lợi. Nghiên cứu đối với người châu Âu (Caucasians) cho thấy nếu thực hiện chế độ ăn ít muối trong hơn 4 tuần nhận thấy sẽ giảm huyết áp, ở cả người bình thường lẫn bệnh nhân tăng huyết áp. Chế độ ăn DASH (Dietary Approaches to Stop Hypertension), chế độ ăn giàu hạt dẻ, cá, gia cầm, trái cây và rau quả giảm huyết áo. Điều quan trọng là phải hạn chế hấp thu Natri, Mặc dù chế độ ăn cũng giàu kali, magnesium, calci, protein. Những phương pháp điều trị khác hướng đến giảm những căng thẳng thần kinh như biofeedback, thư giãn hoặc thiền có thể điều trị huyết áp. Tuy nhiên, hiệu quả của chúng không bằng giáo dục chăm sóc sức khỏe, với những nhận thức những lối sống không tốt.', '../images/huyetap.jpg'),
('3', 'Mất ngủ', 'hahahahaha', ''),
('4', 'Sỏi thận', 'test', ''),
('5', 'Đái tháo đường', 'Đái tháo đường, còn gọi là bệnh tiểu đường, là một nhóm bệnh rối loạn chuyển hóa cacbohydrat, mỡ và protein khi hoóc môn insulin của tụy bị thiếu hay giảm tác động trong cơ thể, biểu hiện bằng mức đường trong máu luôn cao; trong giai đoạn mới phát thường làm bệnh nhân đi tiểu nhiều, tiểu ban đêm và do đó làm khát nước. Bệnh tiểu đường là một trong những nguyên nhân chính của nhiều bệnh hiểm nghèo, điển hình là bệnh tim mạch vành, tai biến mạch máu não, mù mắt, suy thận, liệt dương, hoại thư,... Phân loại: Bệnh tiểu đường có hai thể bệnh chính: Bệnh tiểu đường loại 1 do tụy tạng không tiết insulin, và loại 2 do tiết giảm insulin và đề kháng insulin. Loại 1 (Typ 1): Khoảng 5-10% tổng số bệnh nhân Bệnh tiểu đường thuộc loại 1, phần lớn xảy ra ở trẻ em và người trẻ tuổi (dưới 20 tuổi). Các triệu chứng thường khởi phát đột ngột và tiến triển nhanh nếu không điều trị. Giai đoạn toàn phát có tình trạng thiếu insulin tuyệt đối gây tăng đường huyết và nhiễm Ceton. Những triệu chứng điển hình của Bệnh tiểu đường loại 1 là: ăn nhiều, uống nhiều, tiểu nhiều, gầy nhiều (4 nhiều), mờ mắt, dị cảm và sụt cân, trẻ em chậm phát triển và dễ bị nhiễm trùng. Loại 2 (Typ 2): Bệnh tiểu đường loại 2 chiếm khoảng 90-95% trong tổng số bệnh nhân bệnh tiểu đường, thường gặp ở lứa tuổi trên 40, nhưng gần đây xuất hiện ngày càng nhiều ở lứa tuổi 30, thậm chí cả lứa tuổi thanh thiếu niên. Bệnh nhân thường ít có triệu chứng và thường chỉ được phát hiện bởi các triệu chứng của biến chứng, hoặc chỉ được phát hiện tình cờ khi đi xét nghiệm máu trước khi mổ hoặc khi có biến chứng như nhồi máu cơ tim, tai biến mạch máu não; khi bị nhiễm trùng da kéo dài; bệnh nhân nữ hay bị ngứa vùng do nhiễm nấm âm hộ; bệnh nhân nam bị liệt dương. Bệnh tiểu đường do thai nghén. Tỷ lệ bệnh tiểu đường trong thai kỳ chiếm 3-5% số thai nghén; phát hiện lần đầu tiên trong thai kỳ. Thuốc thảo dược: Nấm lim xanh', '../images/tieuduong.jpg'),
('6', 'Viêm gan B', 'Viêm gan siêu vi B là một số dạng bệnh viêm gan do viêm gan siêu vi B gây ra, truyền nhiễm theo đường máu và sinh dục lây đến gần một phần 3 dân số trên toàn thế giới, nhiều nhất tại các nước đang phát triển. Viêm gan cấp tính: Thời gian ủ bệnh từ 1 - 6 tháng. Một số bệnh nhân có cảm giác như bị cảm nhẹ, đôi khi không biết mình bị HBV. Một số khác bị vàng da, mệt mỏi, đau nhức, buồn ói, chán ăn, sốt nhẹ, biến đổi cảm giác (hiện tượng đặc biệt là người ghiền thuóc lá tự nhiên không thích mùi thuốc lá), đau bụng (dưới sườn bên phải). Những trường hợp bị viêm nặng sẽ đưa đến gan to, ngầy ngật, khó ngủ, mê muội, lãng trí hoặc bất tỉnh. Biểu hiện lâm sàng: Tăng nhiệt độ, vàng da (1 tuần sau khi bị nhiễm và có thể kéo dài đến 1-3 tháng), gan to, lách to. Hiếm khi thấy bàn tay ửng đỏ hoặc \"spider nevi\" (mạch máu li ti kết toả thành hình nhện như hoa thị trên da). Viêm gan mãn tính: Phần lớn khi bị viêm mạn tính cảm thấy bệnh nhân hoàn toàn bình thường. Một số bị viêm mạn tính nặng thì tiếp tục bị các triệu chứng viêm cấp như mệt mỏi, chán ăn, đau bụng, và suy gan. Biểu hiện lâm sàng: Gan to, bàn tay ửng đỏ, spider nevi. Khi bị biến chứng xơ gan có thể bị ứ nước trong bụng, vàng da, loãng máu, chảy máu trong dạ dày, tĩnh mạch toả lớn từ rốn (do tăng áp làm giãn tĩnh mạch cửa gan), nam vú lớn như vú nữ, tinh hoàn teo nhỏ (vì gan yếu làm thay đổi cân bằng của các hormone giới tính). Biến chứng: Suy gan, xơ gan, ung thư gan. Điều trị: Việc điều trị chủ yếu là ngăn chặn sự sinh sôi, nhân lên của virus hoặc các chất làm rối loạn quá trình tổng hợp, tự nhân lên của virus. Lưu ý: Khi nhiễm bệnh, cần tăng cường sức khỏe và tính đề kháng của cơ thể bằng chế độ ăn uống, chú ý đến các loại thực phẩm có lợi cho gan. Hạn chế uống rượu vì rượu không những gây ra xơ gan mà còn hỗ trợ quá trình sao chép, sinh sản của virus viêm gan nên làm tăng nhanh số lượng virus có trong máu và làm giảm khả năng chịu đựng của tế bào gan trước sự tấn công của virus.', '../images/viemganb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `Email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`Email`, `Password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('cc', '6512bd43d9caa6e02c99'),
('dsdfa', 'áº¥das'),
('haha', 'e9f5713dec55d727bb35392cec6190ce');

-- --------------------------------------------------------

--
-- Table structure for table `thuoc`
--

CREATE TABLE `thuoc` (
  `idthuoc` varchar(5) NOT NULL,
  `tenthuoc` varchar(50) CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf32 COLLATE utf32_unicode_ci,
  `anh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thuoc`
--

INSERT INTO `thuoc` (`idthuoc`, `tenthuoc`, `noidung`, `anh`) VALUES
('1', 'Atiso', 'Cây hoa atiso một loại trà, cũng là một vị thuốc nam điều trị bệnh gan rất hay. Ở bài viết này xin giới thiệu với các bạn những công dụng chính và cách dùng vị thuốc này hiệu quả nhất. Cây Atiso được đọc là (ac ti sô) một loại cây thuốc nam được sử dụng bởi người Châu Âu cách đây hàng ngàn năm. Cây Atiso (ac ti sô) có nguồn gốc từ Địa Trung Hải, đã được người Hy Lạp cổ đại trồng làm rau ăn và làm thuốc. Cây được du nhập vào Việt Nam vào những năm 1930 bởi người Pháp. Hiện nay cây Atiso (ac ti sô) được trồng nhiều ở Đà Lạt làm dược liệu, cách đây vài năm trà Atiso là một trong những đồ uống khoái khẩu của nhiều người, được dùng như một thứ đồ uống có công dụng mát gan, giải độc cho cơ thể. Bộ phận dùng: Toàn cây gồm lá, thân, rễ và cả hoa. Cách chế biến và thu hái: Có thể dùng tươi hoặc dùng khô, cây tươi dùng làm rau ăn. Ngoài ra cây còn được phơi khô làm trà và dược liệu. Hoa Atiso thường được thu hái quanh năm, hoa thu về được rửa sạch, phơi hoặc sấy khô làm thuốc. Hiện nay có nhiều công ty đã chế biến dưới dạng trà túi lọc và cao atiso rất tiện sử dụng. Thành phần hóa học: Cây Atiso có chứa nhiều hợp chất quý có lợi cho cơ thể như: Các acid hữu cơ, Flavonoid, Cynaopicrin và nhiều loại khoáng chất khác.', '../images/atiso.jpg'),
('2', 'Mướp đắng rừng', 'Cây mướp đắng rừng còn được gọi là khổ qua rừng là một loài cây mọc hoang ở khắp các sườn đồi từ Bắc trí Nam. Mướp đắng hiện là một trong những loại thực phẩm được nhiều người ưa thích. Tuy có vị đắng nhưng loại mướp đặc biệt này vẫn rất hấp dẫn người sử dụng bởi nó rất tốt cho sức khỏe, đặc biệt là những bệnh nhân bị huyết áp cao. Đặc điểm nhận biết mướp đắng rừng và mướp đắng nhà. Mướp đắng rừng có cùng họ với mướp đắng nhà xong có kích thước quả và dây nhỏ hơn, vị đắng cao hơn. Mướp đắng rừng vẫn được người dân vùng cao hái về dùng làm rau ăn hàng ngày. Cây mọc hoang rất nhiều ở các sườn đồi, đến nỗi nhiều lúc người dân còn phải phát quang đi để tránh làm ảnh hưởng tới những cây trồng khác. Ngày nay, nhu cầu sử dụng mướp đắng làm thuốc tăng cao, người dân vùng cao đi hái quả về thái xong phơi khô để làm thuốc. Mướp khô có thể dùng hãm với nước sôi hoặc đun nước uống hàng ngày. Thành phần hóa học: Trong quả có chứa hoạt chất glucozit đắng gọi là momocđixin, đặc biệt trong quả mướp đắng có hàm lượng vitamin B1, C, betain, protein khá cao. Tác dụng của mướp đắng rừng: Tác dụng hạ huyết áp, tác dụng mát gan giải độc, hạ men gan, tác dụng ổn định đường huyết, hỗ trợ điều trị bệnh tiểu đường Cách dùng khổ qua rừng làm thuốc. Cây mướp đắng rừng có thể dùng tươi hoặc dùng khô đều được. Dùng tươi: Dùng lá, dây hoặc quả nấu canh ăn hàng ngày như các loại mướp thông thường. Dùng khô: Lá, quả đem phơi để sử dùng. Liều dùng: 20g/ngày dưới dạng nước sắc hoặc hãm nước sôi uống hàng ngày.', '../images/Qua-muop-dang-rung-300x168.jpg'),
('3', 'Nấm lim xanh', 'Nấm lim xanh có rất nhiều tác dụng, một trong những tác dụng quý nhất của vị thuốc này đó là tác dụng hỗ trợ điều trị bệnh tiểu đường. Thành phần nấm lim xanh gồm rất nhiều các loại dược chất không đường, các dược chất này có khả năng chuyển hóa đường huyết trong máu, làm giảm lượng đường huyết giúp bệnh nhân tiểu đường ổn định được đường huyết trong máu. Ngoài ra trong nấm lim xanh còn có cơ chế phục hồi các tế bào ở tuyến tụy, giúp tăng sản sinh ra Insulin (Insulin là một chất quan trọng trong có thể, thiếu insulin đồng nghĩa với bạn bị bệnh tiểu đường). Cơ chế của nấm lim xanh là gián tiếp sản sinh ra insulin. Đây là 1 cơ chế điều trị tiểu đường bền vững hơn hẳn so với các loại thuốc điều trị tiểu đường có bán trên thị trường hiện nay. Các phương pháp điều trị bệnh tiểu đường hiện nay đều nhằm mục đích trung là cung cấp trực tiếp 1 lượng insulin cho người bệnh. Ưu điểm của các phương pháp này là hiệu quả nhanh, xong nhược điểm là: Người bệnh tiểu đường phải phụ thuộc hoàn toàn vào thuốc, về lâu về dài làm sẽ làm vô hiệu hóa chức năng tạo insulin tự nhiên của tuyến tụy. Như vậy nấm lim xanh với bệnh tiểu đường có 2 tác dụng chính sau: Giảm lượng đường trong máu, kích thích tăng sản sinh insulin ở tuyến tụy, tăng cường sức đề kháng, ngăn ngừa biến chứng của bệnh tiểu đường. Đây là 2 tác dụng quý giá nhất của nấm lim xanh trong điều trị tiểu đường, các tác dụng này vượt trội hơn hẳn so với các loại thảo dược được cho là có tác dụng điều trị tiểu đường hiện nay. Ngoài ra hàng trục dược chất quý trong nấm lim xanh còn có công dụng đào thải độc tố trong cơ thể, giúp người bệnh nâng cao sức đề kháng, ngăn ngừa các biến chứng bệnh tiểu đường. Cách dùng nấm lim xanh điều trị tiểu đường\r\nChuẩn bị: Nấm lim xanh khô 20g, nước 300ml. Cách làm: Nấm rửa sạch (Nhất là phần chân nấm), thái mỏng, bỏ vào ấm rồi tráng qua 1 lần bằng nước sôi. Đổ 300ml nước sôi vào ấm hãm trong thời gian 30 phút là dùng được. Cách dùng: Uống trước bữa ăn 30 – 40 phút. Các thời gian dùng thuốc Tây từ 30 phút trở lên. Lưu ý khi dùng nấm lim xanh điều trị tiểu đường: Khi dùng nấm các bạn vẫn phải tuân thủ chế độ ăn kiêng của người bệnh tiểu đường Vận đông, thể dục đều đặn sẽ giúp ích rất nhiều cho việc điều trị bệnh Không bỏ thuốc Tây mà nên kết hợp sử dụng để đem lại hiệu quả điều trị cao nhất.', '../images/gia-nam-lim-xanh-tien-phuoc-1.jpg'),
('4', 'giảo cổ lam', NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdnFoMZ4ViebcSoxaotHDfaZLMPrig2eRZdsHF_gRzLfzCRMJdpg'),
('5', 'trà hoa vàng', NULL, 'https://drive.google.com/open?id=1Zc18bqaE7EPEJX12DI-zqRrdqEwO9uuM'),
('6', 'cây cối xay', NULL, 'https://drive.google.com/open?id=1swm2429Z1bsSEmICwLH2DH9QhMQ6Z05p'),
('7', 'hạt chuối cô đơn', NULL, 'https://drive.google.com/open?id=17_MCAlNNmuktEuwK6lU9ovoUb9UG1YUO'),
('8', 'cây bấc đèn', NULL, 'https://drive.google.com/open?id=1FpFVVypKkZs6ZUSbneIZIgmCAs6iBDCJ\r\n'),
('9', 'dạ minh sa', NULL, 'https://drive.google.com/open?id=1HWEC8RqppoZ_-xbXVnp6xHPpZoAsXcSu');

-- --------------------------------------------------------

--
-- Table structure for table `thuocbenh`
--

CREATE TABLE `thuocbenh` (
  `tenbenh` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `idthuoc` varchar(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benh`
--
ALTER TABLE `benh`
  ADD PRIMARY KEY (`idbenh`),
  ADD KEY `idbenh` (`idbenh`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`idthuoc`),
  ADD UNIQUE KEY `idthuoc_4` (`idthuoc`),
  ADD KEY `idthuoc` (`idthuoc`),
  ADD KEY `idthuoc_2` (`idthuoc`),
  ADD KEY `idthuoc_3` (`idthuoc`);

--
-- Indexes for table `thuocbenh`
--
ALTER TABLE `thuocbenh`
  ADD KEY `tenbenh` (`tenbenh`),
  ADD KEY `idthuoc` (`idthuoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
