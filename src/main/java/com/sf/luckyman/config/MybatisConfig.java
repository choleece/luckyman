package com.sf.luckyman.config;

import com.alibaba.druid.pool.DruidDataSource;
import org.apache.ibatis.session.SqlSessionFactory;
import org.mybatis.spring.SqlSessionFactoryBean;
import org.mybatis.spring.annotation.MapperScan;
import org.springframework.boot.context.properties.ConfigurationProperties;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.core.io.support.PathMatchingResourcePatternResolver;
import org.springframework.jdbc.datasource.DataSourceTransactionManager;

import javax.sql.DataSource;

/**
 * @author choleece
 * @description: com.wanling.medical.config
 * @date 2018/1/22 17:10
 */
@Configuration
@MapperScan("com.sf.luckyman.mapper")
public class MybatisConfig {
    private static final String MAPPER_LOCAL = "classpath:mybatis/mapper/*.xml";

    @Bean("dataSource")
    public DruidDataSource dataSource() {
        DruidDataSource dataSource = new DruidDataSource();

        dataSource.setDriverClassName("com.mysql.jdbc.Driver");
        dataSource.setUrl("jdbc:mysql://localhost:3306/luckyman?useUnicode=true&characterEncoding=utf-8");
        dataSource.setUsername("root");
        dataSource.setPassword("123456");
        dataSource.setInitialSize(10);
        dataSource.setMinIdle(50);
        dataSource.setMaxActive(3000);
        dataSource.setMaxWait(60000);

        return dataSource;
    }

    @Bean
    public DataSourceTransactionManager dataSourceTransactionManager(DruidDataSource dataSource) {
        return new DataSourceTransactionManager(dataSource);
    }

    @Bean
    public SqlSessionFactory sqlSessionFactory(DruidDataSource dataSource) throws Exception {
        return createSqlSessionFactory(dataSource, MAPPER_LOCAL);
    }

    private SqlSessionFactory createSqlSessionFactory(DataSource dataSource, String xmlMapperLocations) throws Exception {
        SqlSessionFactoryBean sessionFactoryBean = new SqlSessionFactoryBean();
        sessionFactoryBean.setDataSource(dataSource);
        sessionFactoryBean.setMapperLocations((new PathMatchingResourcePatternResolver()).getResources(xmlMapperLocations));
        return sessionFactoryBean.getObject();
    }
}
