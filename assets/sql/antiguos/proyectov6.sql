-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2016 a las 16:14:15
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE IF NOT EXISTS `asientos` (
  `id` int(11) unsigned NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sala_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=960 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asientos`
--

INSERT INTO `asientos` (`id`, `nom`, `sala_id`) VALUES
(338, 'f0a0', 1),
(339, 'f0a1', 1),
(340, 'f0a2', 1),
(341, 'f0a3', 1),
(342, 'f0a4', 1),
(343, 'f0a5', 1),
(344, 'f0a6', 1),
(345, 'f0a7', 1),
(346, 'f0a8', 1),
(347, 'f0a9', 1),
(348, 'f0a10', 1),
(349, 'f0a11', 1),
(350, 'f0a12', 1),
(351, 'f0a13', 1),
(352, 'f0a14', 1),
(353, 'f0a15', 1),
(354, 'f0a16', 1),
(355, 'f0a17', 1),
(356, 'f0a18', 1),
(357, 'f0a19', 1),
(358, 'f0a20', 1),
(359, 'f1a0', 1),
(360, 'f1a1', 1),
(361, 'f1a2', 1),
(362, 'f1a3', 1),
(363, 'f1a4', 1),
(364, 'f1a5', 1),
(365, 'f1a6', 1),
(366, 'f1a7', 1),
(367, 'f1a8', 1),
(368, 'f1a9', 1),
(369, 'f1a10', 1),
(370, 'f1a11', 1),
(371, 'f1a12', 1),
(372, 'f1a13', 1),
(373, 'f1a14', 1),
(374, 'f1a15', 1),
(375, 'f1a16', 1),
(376, 'f1a17', 1),
(377, 'f1a18', 1),
(378, 'f1a19', 1),
(379, 'f1a20', 1),
(380, 'f2a0', 1),
(381, 'f2a1', 1),
(382, 'f2a2', 1),
(383, 'f2a3', 1),
(384, 'f2a4', 1),
(385, 'f2a5', 1),
(386, 'f2a6', 1),
(387, 'f2a7', 1),
(388, 'f2a8', 1),
(389, 'f2a9', 1),
(390, 'f2a10', 1),
(391, 'f2a11', 1),
(392, 'f2a12', 1),
(393, 'f2a13', 1),
(394, 'f2a14', 1),
(395, 'f2a15', 1),
(396, 'f2a16', 1),
(397, 'f2a17', 1),
(398, 'f2a18', 1),
(399, 'f2a19', 1),
(400, 'f2a20', 1),
(401, 'f3a0', 1),
(402, 'f3a1', 1),
(403, 'f3a2', 1),
(404, 'f3a3', 1),
(405, 'f3a4', 1),
(406, 'f3a5', 1),
(407, 'f3a6', 1),
(408, 'f3a7', 1),
(409, 'f3a8', 1),
(410, 'f3a9', 1),
(411, 'f3a10', 1),
(412, 'f3a11', 1),
(413, 'f3a12', 1),
(414, 'f3a13', 1),
(415, 'f3a14', 1),
(416, 'f3a15', 1),
(417, 'f3a16', 1),
(418, 'f3a17', 1),
(419, 'f3a18', 1),
(420, 'f3a19', 1),
(421, 'f3a20', 1),
(422, 'f4a0', 1),
(423, 'f4a1', 1),
(424, 'f4a2', 1),
(425, 'f4a3', 1),
(426, 'f4a4', 1),
(427, 'f4a5', 1),
(428, 'f4a6', 1),
(429, 'f4a7', 1),
(430, 'f4a8', 1),
(431, 'f4a9', 1),
(432, 'f4a10', 1),
(433, 'f4a11', 1),
(434, 'f4a12', 1),
(435, 'f4a13', 1),
(436, 'f4a14', 1),
(437, 'f4a15', 1),
(438, 'f4a16', 1),
(439, 'f4a17', 1),
(440, 'f4a18', 1),
(441, 'f4a19', 1),
(442, 'f4a20', 1),
(443, 'f5a0', 1),
(444, 'f5a1', 1),
(445, 'f5a2', 1),
(446, 'f5a3', 1),
(447, 'f5a4', 1),
(448, 'f5a5', 1),
(449, 'f5a6', 1),
(450, 'f5a7', 1),
(451, 'f5a8', 1),
(452, 'f5a9', 1),
(453, 'f5a10', 1),
(454, 'f5a11', 1),
(455, 'f5a12', 1),
(456, 'f5a13', 1),
(457, 'f5a14', 1),
(458, 'f5a15', 1),
(459, 'f5a16', 1),
(460, 'f5a17', 1),
(461, 'f5a18', 1),
(462, 'f5a19', 1),
(463, 'f5a20', 1),
(464, 'f6a0', 1),
(465, 'f6a1', 1),
(466, 'f6a2', 1),
(467, 'f6a3', 1),
(468, 'f6a4', 1),
(469, 'f6a5', 1),
(470, 'f6a6', 1),
(471, 'f6a7', 1),
(472, 'f6a8', 1),
(473, 'f6a9', 1),
(474, 'f6a10', 1),
(475, 'f6a11', 1),
(476, 'f6a12', 1),
(477, 'f6a13', 1),
(478, 'f6a14', 1),
(479, 'f6a15', 1),
(480, 'f6a16', 1),
(481, 'f6a17', 1),
(482, 'f6a18', 1),
(483, 'f6a19', 1),
(484, 'f6a20', 1),
(485, 'f7a0', 1),
(486, 'f7a1', 1),
(487, 'f7a2', 1),
(488, 'f7a3', 1),
(489, 'f7a4', 1),
(490, 'f7a5', 1),
(491, 'f7a6', 1),
(492, 'f7a7', 1),
(493, 'f7a8', 1),
(494, 'f7a9', 1),
(495, 'f7a10', 1),
(496, 'f7a11', 1),
(497, 'f7a12', 1),
(498, 'f7a13', 1),
(499, 'f7a14', 1),
(500, 'f7a15', 1),
(501, 'f7a16', 1),
(502, 'f7a17', 1),
(503, 'f7a18', 1),
(504, 'f7a19', 1),
(505, 'f7a20', 1),
(506, 'f8a0', 1),
(507, 'f8a1', 1),
(508, 'f8a2', 1),
(509, 'f8a3', 1),
(510, 'f8a4', 1),
(511, 'f8a5', 1),
(512, 'f8a6', 1),
(513, 'f8a7', 1),
(514, 'f8a8', 1),
(515, 'f8a9', 1),
(516, 'f8a10', 1),
(517, 'f8a11', 1),
(518, 'f8a12', 1),
(519, 'f8a13', 1),
(520, 'f8a14', 1),
(521, 'f8a15', 1),
(522, 'f8a16', 1),
(523, 'f8a17', 1),
(524, 'f8a18', 1),
(525, 'f8a19', 1),
(526, 'f8a20', 1),
(527, 'f9a0', 1),
(528, 'f9a1', 1),
(529, 'f9a2', 1),
(530, 'f9a3', 1),
(531, 'f9a4', 1),
(532, 'f9a5', 1),
(533, 'f9a6', 1),
(534, 'f9a7', 1),
(535, 'f9a8', 1),
(536, 'f9a9', 1),
(537, 'f9a10', 1),
(538, 'f9a11', 1),
(539, 'f9a12', 1),
(540, 'f9a13', 1),
(541, 'f9a14', 1),
(542, 'f9a15', 1),
(543, 'f9a16', 1),
(544, 'f9a17', 1),
(545, 'f9a18', 1),
(546, 'f9a19', 1),
(547, 'f9a20', 1),
(548, 'f10a0', 1),
(549, 'f10a1', 1),
(550, 'f10a2', 1),
(551, 'f10a3', 1),
(552, 'f10a4', 1),
(553, 'f10a5', 1),
(554, 'f10a6', 1),
(555, 'f10a7', 1),
(556, 'f10a8', 1),
(557, 'f10a9', 1),
(558, 'f10a10', 1),
(559, 'f10a11', 1),
(560, 'f10a12', 1),
(561, 'f10a13', 1),
(562, 'f10a14', 1),
(563, 'f10a15', 1),
(564, 'f10a16', 1),
(565, 'f10a17', 1),
(566, 'f10a18', 1),
(567, 'f10a19', 1),
(568, 'f10a20', 1),
(569, 'f11a0', 1),
(570, 'f11a1', 1),
(571, 'f11a2', 1),
(572, 'f11a3', 1),
(573, 'f11a4', 1),
(574, 'f11a5', 1),
(575, 'f11a6', 1),
(576, 'f11a7', 1),
(577, 'f11a8', 1),
(578, 'f11a9', 1),
(579, 'f11a10', 1),
(580, 'f11a11', 1),
(581, 'f11a12', 1),
(582, 'f11a13', 1),
(583, 'f11a14', 1),
(584, 'f11a15', 1),
(585, 'f11a16', 1),
(586, 'f11a17', 1),
(587, 'f11a18', 1),
(588, 'f11a19', 1),
(589, 'f11a20', 1),
(590, 'f12a0', 1),
(591, 'f12a1', 1),
(592, 'f12a2', 1),
(593, 'f12a3', 1),
(594, 'f12a4', 1),
(595, 'f12a5', 1),
(596, 'f12a6', 1),
(597, 'f12a7', 1),
(598, 'f12a8', 1),
(599, 'f12a9', 1),
(600, 'f12a10', 1),
(601, 'f12a11', 1),
(602, 'f12a12', 1),
(603, 'f12a13', 1),
(604, 'f12a14', 1),
(605, 'f12a15', 1),
(606, 'f12a16', 1),
(607, 'f12a17', 1),
(608, 'f12a18', 1),
(609, 'f12a19', 1),
(610, 'f12a20', 1),
(611, 'f13a0', 1),
(612, 'f13a1', 1),
(613, 'f13a2', 1),
(614, 'f13a3', 1),
(615, 'f13a4', 1),
(616, 'f13a5', 1),
(617, 'f13a6', 1),
(618, 'f13a7', 1),
(619, 'f13a8', 1),
(620, 'f13a9', 1),
(621, 'f13a10', 1),
(622, 'f13a11', 1),
(623, 'f13a12', 1),
(624, 'f13a13', 1),
(625, 'f13a14', 1),
(626, 'f13a15', 1),
(627, 'f13a16', 1),
(628, 'f13a17', 1),
(629, 'f13a18', 1),
(630, 'f13a19', 1),
(631, 'f13a20', 1),
(632, 'f14a0', 1),
(633, 'f14a1', 1),
(634, 'f14a2', 1),
(635, 'f14a3', 1),
(636, 'f14a4', 1),
(637, 'f14a5', 1),
(638, 'f14a6', 1),
(639, 'f14a7', 1),
(640, 'f14a8', 1),
(641, 'f14a9', 1),
(642, 'f14a10', 1),
(643, 'f14a11', 1),
(644, 'f14a12', 1),
(645, 'f14a13', 1),
(646, 'f14a14', 1),
(647, 'f14a15', 1),
(648, 'f14a16', 1),
(649, 'f14a17', 1),
(650, 'f14a18', 1),
(651, 'f14a19', 1),
(652, 'f14a20', 1),
(653, 'f15a0', 1),
(654, 'f15a1', 1),
(655, 'f15a2', 1),
(656, 'f15a3', 1),
(657, 'f15a4', 1),
(658, 'f15a5', 1),
(659, 'f15a6', 1),
(660, 'f15a7', 1),
(661, 'f15a8', 1),
(662, 'f15a9', 1),
(663, 'f15a10', 1),
(664, 'f15a11', 1),
(665, 'f15a12', 1),
(666, 'f15a13', 1),
(667, 'f15a14', 1),
(668, 'f15a15', 1),
(669, 'f15a16', 1),
(670, 'f15a17', 1),
(671, 'f15a18', 1),
(672, 'f15a19', 1),
(673, 'f15a20', 1),
(674, 'f1a1', NULL),
(675, 'f0a0', 2),
(676, 'f0a1', 2),
(677, 'f0a2', 2),
(678, 'f0a3', 2),
(679, 'f0a4', 2),
(680, 'f0a5', 2),
(681, 'f0a6', 2),
(682, 'f0a7', 2),
(683, 'f0a8', 2),
(684, 'f0a9', 2),
(685, 'f0a10', 2),
(686, 'f0a11', 2),
(687, 'f0a12', 2),
(688, 'f0a13', 2),
(689, 'f0a14', 2),
(690, 'f0a15', 2),
(691, 'f0a16', 2),
(692, 'f0a17', 2),
(693, 'f0a18', 2),
(694, 'f1a0', 2),
(695, 'f1a1', 2),
(696, 'f1a2', 2),
(697, 'f1a3', 2),
(698, 'f1a4', 2),
(699, 'f1a5', 2),
(700, 'f1a6', 2),
(701, 'f1a7', 2),
(702, 'f1a8', 2),
(703, 'f1a9', 2),
(704, 'f1a10', 2),
(705, 'f1a11', 2),
(706, 'f1a12', 2),
(707, 'f1a13', 2),
(708, 'f1a14', 2),
(709, 'f1a15', 2),
(710, 'f1a16', 2),
(711, 'f1a17', 2),
(712, 'f1a18', 2),
(713, 'f2a0', 2),
(714, 'f2a1', 2),
(715, 'f2a2', 2),
(716, 'f2a3', 2),
(717, 'f2a4', 2),
(718, 'f2a5', 2),
(719, 'f2a6', 2),
(720, 'f2a7', 2),
(721, 'f2a8', 2),
(722, 'f2a9', 2),
(723, 'f2a10', 2),
(724, 'f2a11', 2),
(725, 'f2a12', 2),
(726, 'f2a13', 2),
(727, 'f2a14', 2),
(728, 'f2a15', 2),
(729, 'f2a16', 2),
(730, 'f2a17', 2),
(731, 'f2a18', 2),
(732, 'f3a0', 2),
(733, 'f3a1', 2),
(734, 'f3a2', 2),
(735, 'f3a3', 2),
(736, 'f3a4', 2),
(737, 'f3a5', 2),
(738, 'f3a6', 2),
(739, 'f3a7', 2),
(740, 'f3a8', 2),
(741, 'f3a9', 2),
(742, 'f3a10', 2),
(743, 'f3a11', 2),
(744, 'f3a12', 2),
(745, 'f3a13', 2),
(746, 'f3a14', 2),
(747, 'f3a15', 2),
(748, 'f3a16', 2),
(749, 'f3a17', 2),
(750, 'f3a18', 2),
(751, 'f4a0', 2),
(752, 'f4a1', 2),
(753, 'f4a2', 2),
(754, 'f4a3', 2),
(755, 'f4a4', 2),
(756, 'f4a5', 2),
(757, 'f4a6', 2),
(758, 'f4a7', 2),
(759, 'f4a8', 2),
(760, 'f4a9', 2),
(761, 'f4a10', 2),
(762, 'f4a11', 2),
(763, 'f4a12', 2),
(764, 'f4a13', 2),
(765, 'f4a14', 2),
(766, 'f4a15', 2),
(767, 'f4a16', 2),
(768, 'f4a17', 2),
(769, 'f4a18', 2),
(770, 'f5a0', 2),
(771, 'f5a1', 2),
(772, 'f5a2', 2),
(773, 'f5a3', 2),
(774, 'f5a4', 2),
(775, 'f5a5', 2),
(776, 'f5a6', 2),
(777, 'f5a7', 2),
(778, 'f5a8', 2),
(779, 'f5a9', 2),
(780, 'f5a10', 2),
(781, 'f5a11', 2),
(782, 'f5a12', 2),
(783, 'f5a13', 2),
(784, 'f5a14', 2),
(785, 'f5a15', 2),
(786, 'f5a16', 2),
(787, 'f5a17', 2),
(788, 'f5a18', 2),
(789, 'f6a0', 2),
(790, 'f6a1', 2),
(791, 'f6a2', 2),
(792, 'f6a3', 2),
(793, 'f6a4', 2),
(794, 'f6a5', 2),
(795, 'f6a6', 2),
(796, 'f6a7', 2),
(797, 'f6a8', 2),
(798, 'f6a9', 2),
(799, 'f6a10', 2),
(800, 'f6a11', 2),
(801, 'f6a12', 2),
(802, 'f6a13', 2),
(803, 'f6a14', 2),
(804, 'f6a15', 2),
(805, 'f6a16', 2),
(806, 'f6a17', 2),
(807, 'f6a18', 2),
(808, 'f7a0', 2),
(809, 'f7a1', 2),
(810, 'f7a2', 2),
(811, 'f7a3', 2),
(812, 'f7a4', 2),
(813, 'f7a5', 2),
(814, 'f7a6', 2),
(815, 'f7a7', 2),
(816, 'f7a8', 2),
(817, 'f7a9', 2),
(818, 'f7a10', 2),
(819, 'f7a11', 2),
(820, 'f7a12', 2),
(821, 'f7a13', 2),
(822, 'f7a14', 2),
(823, 'f7a15', 2),
(824, 'f7a16', 2),
(825, 'f7a17', 2),
(826, 'f7a18', 2),
(827, 'f8a0', 2),
(828, 'f8a1', 2),
(829, 'f8a2', 2),
(830, 'f8a3', 2),
(831, 'f8a4', 2),
(832, 'f8a5', 2),
(833, 'f8a6', 2),
(834, 'f8a7', 2),
(835, 'f8a8', 2),
(836, 'f8a9', 2),
(837, 'f8a10', 2),
(838, 'f8a11', 2),
(839, 'f8a12', 2),
(840, 'f8a13', 2),
(841, 'f8a14', 2),
(842, 'f8a15', 2),
(843, 'f8a16', 2),
(844, 'f8a17', 2),
(845, 'f8a18', 2),
(846, 'f9a0', 2),
(847, 'f9a1', 2),
(848, 'f9a2', 2),
(849, 'f9a3', 2),
(850, 'f9a4', 2),
(851, 'f9a5', 2),
(852, 'f9a6', 2),
(853, 'f9a7', 2),
(854, 'f9a8', 2),
(855, 'f9a9', 2),
(856, 'f9a10', 2),
(857, 'f9a11', 2),
(858, 'f9a12', 2),
(859, 'f9a13', 2),
(860, 'f9a14', 2),
(861, 'f9a15', 2),
(862, 'f9a16', 2),
(863, 'f9a17', 2),
(864, 'f9a18', 2),
(865, 'f10a0', 2),
(866, 'f10a1', 2),
(867, 'f10a2', 2),
(868, 'f10a3', 2),
(869, 'f10a4', 2),
(870, 'f10a5', 2),
(871, 'f10a6', 2),
(872, 'f10a7', 2),
(873, 'f10a8', 2),
(874, 'f10a9', 2),
(875, 'f10a10', 2),
(876, 'f10a11', 2),
(877, 'f10a12', 2),
(878, 'f10a13', 2),
(879, 'f10a14', 2),
(880, 'f10a15', 2),
(881, 'f10a16', 2),
(882, 'f10a17', 2),
(883, 'f10a18', 2),
(884, 'f11a0', 2),
(885, 'f11a1', 2),
(886, 'f11a2', 2),
(887, 'f11a3', 2),
(888, 'f11a4', 2),
(889, 'f11a5', 2),
(890, 'f11a6', 2),
(891, 'f11a7', 2),
(892, 'f11a8', 2),
(893, 'f11a9', 2),
(894, 'f11a10', 2),
(895, 'f11a11', 2),
(896, 'f11a12', 2),
(897, 'f11a13', 2),
(898, 'f11a14', 2),
(899, 'f11a15', 2),
(900, 'f11a16', 2),
(901, 'f11a17', 2),
(902, 'f11a18', 2),
(903, 'f12a0', 2),
(904, 'f12a1', 2),
(905, 'f12a2', 2),
(906, 'f12a3', 2),
(907, 'f12a4', 2),
(908, 'f12a5', 2),
(909, 'f12a6', 2),
(910, 'f12a7', 2),
(911, 'f12a8', 2),
(912, 'f12a9', 2),
(913, 'f12a10', 2),
(914, 'f12a11', 2),
(915, 'f12a12', 2),
(916, 'f12a13', 2),
(917, 'f12a14', 2),
(918, 'f12a15', 2),
(919, 'f12a16', 2),
(920, 'f12a17', 2),
(921, 'f12a18', 2),
(922, 'f13a0', 2),
(923, 'f13a1', 2),
(924, 'f13a2', 2),
(925, 'f13a3', 2),
(926, 'f13a4', 2),
(927, 'f13a5', 2),
(928, 'f13a6', 2),
(929, 'f13a7', 2),
(930, 'f13a8', 2),
(931, 'f13a9', 2),
(932, 'f13a10', 2),
(933, 'f13a11', 2),
(934, 'f13a12', 2),
(935, 'f13a13', 2),
(936, 'f13a14', 2),
(937, 'f13a15', 2),
(938, 'f13a16', 2),
(939, 'f13a17', 2),
(940, 'f13a18', 2),
(941, 'f14a0', 2),
(942, 'f14a1', 2),
(943, 'f14a2', 2),
(944, 'f14a3', 2),
(945, 'f14a4', 2),
(946, 'f14a5', 2),
(947, 'f14a6', 2),
(948, 'f14a7', 2),
(949, 'f14a8', 2),
(950, 'f14a9', 2),
(951, 'f14a10', 2),
(952, 'f14a11', 2),
(953, 'f14a12', 2),
(954, 'f14a13', 2),
(955, 'f14a14', 2),
(956, 'f14a15', 2),
(957, 'f14a16', 2),
(958, 'f14a17', 2),
(959, 'f14a18', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientosbloqueados`
--

CREATE TABLE IF NOT EXISTS `asientosbloqueados` (
  `id` int(11) unsigned NOT NULL,
  `id_asiento` int(11) unsigned DEFAULT NULL,
  `id_sesion` int(11) unsigned DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  `id_usuario` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asientosbloqueados`
--

INSERT INTO `asientosbloqueados` (`id`, `id_asiento`, `id_sesion`, `hora`, `id_usuario`) VALUES
(4, 408, 59, '2016-05-16 11:22:33', 5764),
(5, 430, 59, '2016-05-16 11:22:36', 5764),
(6, 409, 59, '2016-05-16 11:22:39', 5764);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartelera`
--

CREATE TABLE IF NOT EXISTS `cartelera` (
  `id` int(11) unsigned NOT NULL,
  `pelicula_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cartelera`
--

INSERT INTO `cartelera` (`id`, `pelicula_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradareserva`
--

CREATE TABLE IF NOT EXISTS `entradareserva` (
  `id` int(11) unsigned NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `asientos_id` int(11) unsigned DEFAULT NULL,
  `sala_id` int(11) unsigned DEFAULT NULL,
  `sesion_id` int(11) unsigned DEFAULT NULL,
  `precio` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entradareserva`
--

INSERT INTO `entradareserva` (`id`, `fecha`, `asientos_id`, `sala_id`, `sesion_id`, `precio`) VALUES
(6, '2016-05-07 10:04:02', 405, 1, 10, 6.7),
(7, '2016-05-07 10:04:02', 406, 1, 10, 6.7),
(8, '2016-05-07 10:04:02', 407, 1, 10, 6.7),
(9, '2016-05-07 10:05:37', 356, 1, 29, 6.7),
(10, '2016-05-07 10:05:37', 386, 1, 29, 6.7),
(11, '2016-05-07 10:06:11', 363, 1, 46, 6.7),
(12, '2016-05-07 10:06:21', 363, 1, 46, 6.7),
(13, '2016-05-07 10:08:09', 342, 1, 46, 6.7),
(14, '2016-05-07 10:08:09', 348, 1, 46, 6.7),
(15, '2016-05-07 10:08:09', 362, 1, 46, 6.7),
(16, '2016-05-07 10:08:09', 388, 1, 46, 6.7),
(17, '2016-05-07 10:08:09', 408, 1, 46, 6.7),
(18, '2016-05-07 15:59:40', 515, 1, 46, 6.7),
(19, '2016-05-07 15:59:40', 516, 1, 46, 6.7),
(20, '2016-05-07 16:03:49', 599, 1, 27, 6.7),
(21, '2016-05-07 16:03:49', 600, 1, 27, 6.7),
(22, '2016-05-07 17:43:26', 599, 1, 27, 6.7),
(23, '2016-05-07 17:43:26', 600, 1, 27, 6.7),
(24, '2016-05-07 17:44:35', 816, 2, 55, 6.7),
(25, '2016-05-07 17:44:35', 836, 2, 55, 6.7),
(26, '2016-05-08 18:59:48', 451, 1, 31, 6.7),
(27, '2016-05-08 18:59:48', 452, 1, 31, 6.7),
(28, '2016-05-16 11:23:38', 408, 1, 59, 6.7),
(29, '2016-05-16 11:23:38', 409, 1, 59, 6.7),
(30, '2016-05-16 11:23:38', 430, 1, 59, 6.7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradareserva_factura`
--

CREATE TABLE IF NOT EXISTS `entradareserva_factura` (
  `id` int(11) unsigned NOT NULL,
  `factura_id` int(11) unsigned DEFAULT NULL,
  `entradareserva_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entradareserva_factura`
--

INSERT INTO `entradareserva_factura` (`id`, `factura_id`, `entradareserva_id`) VALUES
(5, 6, 6),
(6, 6, 7),
(7, 6, 8),
(8, 7, 9),
(9, 7, 10),
(10, 8, 11),
(11, 9, 12),
(12, 10, 13),
(13, 10, 14),
(14, 10, 15),
(15, 10, 16),
(16, 10, 17),
(17, 11, 18),
(18, 11, 19),
(19, 12, 20),
(20, 12, 21),
(21, 13, 22),
(22, 13, 23),
(23, 14, 24),
(24, 14, 25),
(25, 15, 26),
(26, 15, 27),
(27, 16, 28),
(28, 16, 29),
(29, 16, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(11) unsigned NOT NULL,
  `usuario_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `usuario_id`) VALUES
(3, NULL),
(13, NULL),
(15, NULL),
(4, 57),
(5, 57),
(6, 57),
(7, 57),
(8, 57),
(9, 57),
(10, 57),
(11, 57),
(12, 57),
(14, 57),
(16, 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE IF NOT EXISTS `incidencias` (
  `id` int(11) unsigned NOT NULL,
  `problema` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_incidencia` datetime DEFAULT NULL,
  `usuario_id` int(11) unsigned DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uniqid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `problema`, `fecha_incidencia`, `usuario_id`, `estado`, `uniqid`) VALUES
(26, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 00:00:00', 67, 'activa', NULL),
(27, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 00:00:00', 67, 'activa', NULL),
(28, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 00:00:00', 67, 'activa', NULL),
(29, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 00:00:00', 67, 'activa', NULL),
(30, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 00:00:00', 67, 'activa', NULL),
(31, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 00:00:00', 67, 'activa', NULL),
(32, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 00:00:00', 67, 'activa', NULL),
(33, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 10:16:19', 67, 'activa', NULL),
(34, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 10:19:50', 67, 'activa', '57416ba6636a11.90208372'),
(35, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 10:55:30', 67, 'activa', '57417402bedf7'),
(36, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-05-22 12:49:23', 57, 'activa', '57418eb3bf8b0'),
(37, 'No puedo descargar entradas', '2016-05-22 12:53:48', 57, 'activa', '57418fbcca9d3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) unsigned NOT NULL,
  `mensaje` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incidencia_id` int(11) unsigned DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `remitente_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `mensaje`, `remitente`, `incidencia_id`, `fecha_hora`, `remitente_id`) VALUES
(6, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 26, '2016-05-22 10:12:49', NULL),
(7, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 27, '2016-05-22 10:13:20', NULL),
(8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 28, '2016-05-22 10:13:21', NULL),
(9, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 29, '2016-05-22 10:13:22', NULL),
(10, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 30, '2016-05-22 10:14:28', NULL),
(11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 31, '2016-05-22 10:15:09', NULL),
(12, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 32, '2016-05-22 10:15:23', NULL),
(13, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 33, '2016-05-22 10:16:19', NULL),
(14, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 34, '2016-05-22 10:19:50', NULL),
(15, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'aaaaa@aaaaa.com', 35, '2016-05-22 10:55:30', NULL),
(16, 'Al meterme en la zona de usuario, y intentar descargar mis entradas no puedo. Por que puede ser? Gracias de antemano', NULL, 36, '2016-05-22 12:49:23', 57),
(17, 'Al meterme en la zona de usuario, y intentar descargar mis entradas no puedo. Por que puede ser? Gracias de antemano', 'charly.9349@gmail.com', 37, '2016-05-22 12:53:48', 57),
(18, 'Al meterme en la zona de usuario, y intentar descargar mis entradas no puedo. Por que puede ser? Gracias de antemano', 'soporte', 37, '2016-05-22 12:53:48', 57),
(19, 'ok lo revisare. muchas gracias', 'charly.9349@gmail.com', 37, '1970-01-01 01:00:00', 57),
(24, 'vale', 'soporte', 37, '2016-05-22 16:10:00', 57),
(26, 'Prueba 85000', 'charly.9349@gmail.com', 37, '2016-05-22 16:12:01', 57),
(27, 'prueba85000', 'charly.9349@gmail.com', 37, '2016-05-22 16:13:00', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE IF NOT EXISTS `pelicula` (
  `id` int(11) unsigned NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `titulo`, `director`, `ruta`) VALUES
(1, 'Batman', 'aa', 'localhost://dsasa.txt'),
(2, 'El señor de los anillos', 'Director Señor', 'rutaa'),
(3, 'aaaaa', 'bbbbbbb', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `id` int(11) unsigned NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `tipo`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE IF NOT EXISTS `sesion` (
  `id` int(11) unsigned NOT NULL,
  `hora` datetime DEFAULT NULL,
  `pelicula_id` int(11) unsigned DEFAULT NULL,
  `sala_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `hora`, `pelicula_id`, `sala_id`) VALUES
(3, '2016-03-20 12:00:00', 1, 1),
(4, '2016-03-20 14:00:00', 1, 1),
(5, '2016-03-20 16:00:00', 1, 1),
(6, '2016-03-20 18:00:00', 1, 1),
(7, '2016-03-20 20:00:00', 2, 1),
(8, '2016-03-20 22:00:00', 1, 1),
(9, '2016-05-07 17:00:00', 3, 1),
(10, '2016-05-07 19:00:00', 3, 1),
(11, '2016-05-08 17:00:00', 3, 1),
(12, '2016-05-08 19:00:00', 3, 1),
(13, '2016-05-09 17:00:00', 3, 1),
(14, '2016-05-09 19:00:00', 3, 1),
(15, '2016-05-10 17:00:00', 3, 1),
(16, '2016-05-10 19:00:00', 3, 1),
(17, '2016-05-11 17:00:00', 3, 1),
(18, '2016-05-11 19:00:00', 3, 1),
(19, '2016-05-12 17:00:00', 3, 1),
(20, '2016-05-12 19:00:00', 3, 1),
(21, '2016-05-13 17:00:00', 3, 1),
(22, '2016-05-13 19:00:00', 3, 1),
(23, '2016-05-05 17:00:00', 1, 1),
(24, '2016-05-05 18:00:00', 1, 1),
(25, '2016-05-06 17:00:00', 1, 1),
(26, '2016-05-06 18:00:00', 1, 1),
(27, '2016-05-07 17:00:00', 1, 1),
(28, '2016-05-07 18:00:00', 1, 1),
(29, '2016-05-08 17:00:00', 1, 1),
(30, '2016-05-08 18:00:00', 1, 1),
(31, '2016-05-09 17:00:00', 1, 1),
(32, '2016-05-09 18:00:00', 1, 1),
(33, '2016-05-10 17:00:00', 1, 1),
(34, '2016-05-10 18:00:00', 1, 1),
(35, '2016-05-11 17:00:00', 1, 1),
(36, '2016-05-11 18:00:00', 1, 1),
(37, '2016-05-12 17:00:00', 1, 1),
(38, '2016-05-12 18:00:00', 1, 1),
(39, '2016-05-13 17:00:00', 1, 1),
(40, '2016-05-13 18:00:00', 1, 1),
(41, '2016-05-14 17:00:00', 1, 1),
(42, '2016-05-14 18:00:00', 1, 1),
(43, '2016-05-15 17:00:00', 1, 1),
(44, '2016-05-15 18:00:00', 1, 1),
(45, '2016-05-06 18:00:00', 2, 1),
(46, '2016-05-07 18:00:00', 2, 1),
(47, '2016-05-08 18:00:00', 2, 1),
(48, '2016-05-09 18:00:00', 2, 1),
(49, '2016-05-10 18:00:00', 2, 1),
(50, '2016-05-06 18:00:00', 2, 1),
(55, '2016-05-10 19:00:00', 2, 2),
(56, '2016-05-11 19:00:00', 2, 2),
(57, '2016-05-12 19:00:00', 2, 2),
(58, '2016-05-13 19:00:00', 2, 2),
(59, '2016-05-16 16:00:00', 1, 1),
(60, '2016-05-16 17:00:00', 1, 1),
(61, '2016-05-16 18:00:00', 1, 1),
(62, '2016-05-16 19:00:00', 1, 1),
(63, '2016-05-17 16:00:00', 1, 1),
(64, '2016-05-17 17:00:00', 1, 1),
(65, '2016-05-17 18:00:00', 1, 1),
(66, '2016-05-17 19:00:00', 1, 1),
(67, '2016-05-18 16:00:00', 1, 1),
(68, '2016-05-18 17:00:00', 1, 1),
(69, '2016-05-18 18:00:00', 1, 1),
(70, '2016-05-18 19:00:00', 1, 1),
(71, '2016-05-19 16:00:00', 1, 1),
(72, '2016-05-19 17:00:00', 1, 1),
(73, '2016-05-19 18:00:00', 1, 1),
(74, '2016-05-19 19:00:00', 1, 1),
(75, '2016-05-20 16:00:00', 1, 1),
(76, '2016-05-20 17:00:00', 1, 1),
(77, '2016-05-20 18:00:00', 1, 1),
(78, '2016-05-20 19:00:00', 1, 1),
(79, '2016-05-21 16:00:00', 1, 1),
(80, '2016-05-21 17:00:00', 1, 1),
(81, '2016-05-21 18:00:00', 1, 1),
(82, '2016-05-21 19:00:00', 1, 1),
(83, '2016-05-22 16:00:00', 1, 1),
(84, '2016-05-22 17:00:00', 1, 1),
(85, '2016-05-22 18:00:00', 1, 1),
(86, '2016-05-22 19:00:00', 1, 1),
(87, '2016-05-23 16:00:00', 1, 1),
(88, '2016-05-23 17:00:00', 1, 1),
(89, '2016-05-23 18:00:00', 1, 1),
(90, '2016-05-23 19:00:00', 1, 1),
(91, '2016-05-24 16:00:00', 1, 1),
(92, '2016-05-24 17:00:00', 1, 1),
(93, '2016-05-24 18:00:00', 1, 1),
(94, '2016-05-24 19:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) unsigned NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verificado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniqid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `hash`, `nombre`, `apellidos`, `fechanacimiento`, `ciudad`, `verificado`, `uniqid`) VALUES
(1, 'ismael', 'aaaa', 'Ismael', 'Nuñez Garcia', '1994-03-03', 'Madrid', 'NO', NULL),
(57, 'charly.9349@gmail.com', '$2y$10$6asLfCFOY2rkPrKfRiXVX.6apTywm2oiMcIOzgRb3wZ0cc4Tlwpxu', 'Carlos', 'Garbajosa Barroso', '1993-02-09', 'Madrid', 'SI', '570a664d5105f'),
(65, 'isma.sanfer.94@gmail.com', '$2y$10$JJoZ92DPzyfCm..S6wXBRufVzR7PVnCVYUGDMZPIjZ48oOBSHVUSO', 'ismael', 'Nunez Garcia', '2011-02-09', 'Madrid', 'SI', '572da0aec2ff4'),
(67, 'c.garbajosabarroso@gmail.com', '$2y$10$P6oqAkJPNW/G1N2N3tagCO5cFbixnaeqAS4kL3tuOd6e07HPbPg6y', 'Carlos', 'Garbajosa Barroso', '1993-02-09', 'Madrid', 'SI', '573981f00f636');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_asientos_sala` (`sala_id`);

--
-- Indices de la tabla `asientosbloqueados`
--
ALTER TABLE `asientosbloqueados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cartelera`
--
ALTER TABLE `cartelera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_cartelera_pelicula` (`pelicula_id`);

--
-- Indices de la tabla `entradareserva`
--
ALTER TABLE `entradareserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_entradareserva_asientos` (`asientos_id`),
  ADD KEY `index_foreignkey_entradareserva_sala` (`sala_id`),
  ADD KEY `index_foreignkey_entradareserva_sesion` (`sesion_id`);

--
-- Indices de la tabla `entradareserva_factura`
--
ALTER TABLE `entradareserva_factura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ_a651728e9f7e59994f2b21b19a2b2ed45e95990d` (`entradareserva_id`,`factura_id`),
  ADD KEY `index_foreignkey_entradareserva_factura_factura` (`factura_id`),
  ADD KEY `index_foreignkey_entradareserva_factura_entradareserva` (`entradareserva_id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_factura_usuario` (`usuario_id`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_incidencias_usuario` (`usuario_id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_mensajes_incidencia` (`incidencia_id`),
  ADD KEY `index_foreignkey_mensajes_remitente` (`remitente_id`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_sesion_pelicula` (`pelicula_id`),
  ADD KEY `index_foreignkey_sesion_sala` (`sala_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asientos`
--
ALTER TABLE `asientos`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=960;
--
-- AUTO_INCREMENT de la tabla `asientosbloqueados`
--
ALTER TABLE `asientosbloqueados`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cartelera`
--
ALTER TABLE `cartelera`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `entradareserva`
--
ALTER TABLE `entradareserva`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `entradareserva_factura`
--
ALTER TABLE `entradareserva_factura`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD CONSTRAINT `c_fk_asientos_sala_id` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `cartelera`
--
ALTER TABLE `cartelera`
  ADD CONSTRAINT `c_fk_cartelera_pelicula_id` FOREIGN KEY (`pelicula_id`) REFERENCES `pelicula` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `entradareserva`
--
ALTER TABLE `entradareserva`
  ADD CONSTRAINT `c_fk_entradareserva_asientos_id` FOREIGN KEY (`asientos_id`) REFERENCES `asientos` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_entradareserva_sala_id` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_entradareserva_sesion_id` FOREIGN KEY (`sesion_id`) REFERENCES `sesion` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `entradareserva_factura`
--
ALTER TABLE `entradareserva_factura`
  ADD CONSTRAINT `c_fk_entradareserva_factura_entradareserva_id` FOREIGN KEY (`entradareserva_id`) REFERENCES `entradareserva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_fk_entradareserva_factura_factura_id` FOREIGN KEY (`factura_id`) REFERENCES `factura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `c_fk_factura_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `c_fk_incidencias_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `c_fk_mensajes_incidencia_id` FOREIGN KEY (`incidencia_id`) REFERENCES `incidencias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_fk_mensajes_remitente_id` FOREIGN KEY (`remitente_id`) REFERENCES `usuario` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `c_fk_sesion_pelicula_id` FOREIGN KEY (`pelicula_id`) REFERENCES `pelicula` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_sesion_sala_id` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
