package com.sf;

import com.sf.luckyman.mapper.IndexMapper;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.context.junit4.SpringRunner;

@RunWith(SpringRunner.class)
@SpringBootTest(classes = LuckymanApplicationTests.class)
public class LuckymanApplicationTests {
	@Autowired
	private IndexMapper indexMapper;

	@Test
	public void contextLoads() {
		System.out.println(indexMapper.listSigner());
	}

}
